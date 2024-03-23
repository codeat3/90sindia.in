<?php

namespace App\Actions;

use Illuminate\Support\Arr;
use Alaouy\Youtube\Facades\Youtube;
use App\Actions\ImportChannelDetails;
use Illuminate\Support\Facades\Cache;
use Domain\TalksAtConfs\Actions\AddChannel;
use Illuminate\Support\Carbon;

class ImportPlaylistDetails
{
    private function getYoutubeResponse($id)
    {
        return Cache::remember(
            'playlist-' . $id,
            now()->addWeek(),
            fn () => Youtube::getChannelById($id)
        );
    }

    private function processResponse($result)
    {
        $channel = (new AddChannel())->handle(
            [
                'source' => 'youtube',
                'key' => Arr::get($result, 'id'),
                'title' => Arr::get($result, 'snippet.title'),
                'description' => Arr::get($result, 'snippet.description'),
                'custom_url' => Arr::get($result, 'snippet.customUrl'),
            ]
        );

        return $channel->id;
    }

    private function getPlaylistDetails($id)
    {
        return Cache::remember(
            'playlist-details-' . $id,
            now()->addWeek(),
            fn () => Youtube::getPlaylistById($id)
        );
    }

    private function updatePlaylistDetails($id)
    {
        $playlistDetails = $this->getPlaylistDetails($id);

        $playlistData = [
            'id' => $playlistDetails->id,
            'title' => $playlistDetails->snippet->localized->title,
            'channel_id' => $playlistDetails->snippet->channelId,
            'meta' => $playlistDetails,
        ];

        return (new AddPlaylist)->handle($playlistData);
    }

    private function getPlaylistItems($id, $token = '')
    {
        return Cache::remember(
            'playlist-items-' . $id . '-' . $token,
            now()->addWeek(),
            fn () => Youtube::getPlaylistItemsByPlaylistId($id, $token)
        );
    }

    private function updatePlaylistItems($playlist)
    {
        $videos = [];
        $token = '';
        do {

            $playlistItems = $this->getPlaylistItems($playlist->id, $token);


            collect(Arr::get($playlistItems, 'results'))
                ->each(function ($videoDetails) use (&$videos) {
                    $videoData = [
                        'id' => $videoDetails->contentDetails->videoId,
                        'title' => $videoDetails->snippet->title,
                        'description' => $videoDetails->snippet->description,
                        'published_at' => (isset($videoDetails->contentDetails->videoPublishedAt))
                            ? Carbon::parse($videoDetails->contentDetails->videoPublishedAt)->toDateTimeString()
                            : null,
                        'meta' => $videoDetails
                    ];

                    $video = (new AddVideo)->handle($videoData);
                    $videos[$video->id] = [
                        'position' => (int)$videoDetails->snippet->position + 1,
                    ];
                });

            $token = Arr::get($playlistItems, 'info.nextPageToken');
        } while ($token);

        $playlist->videos()->sync($videos);
    }

    public function handle($id): void
    {
        // get playlist details
        dump('updating playlist details: ' . $id);
        $playlist = $this->updatePlaylistDetails($id);

        // check if playlist has channel id and does that channel exists in DB
        if ($playlist->channel_id) {
            dump('updating channel details: ' . $playlist->channel_id);
            (new ImportChannelDetails())->handle($playlist->channel_id);
        }

        dump('done with playlist & channel metadata');

        // get playlist items
        $this->updatePlaylistItems($playlist);
    }
}
