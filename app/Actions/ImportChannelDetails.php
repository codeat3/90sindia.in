<?php

namespace App\Actions;

use Illuminate\Support\Arr;
use Alaouy\Youtube\Facades\Youtube;
use App\Actions\AddChannel;
use App\Models\Channel;
use Illuminate\Support\Facades\Cache;

class ImportChannelDetails
{
    private function getYoutubeResponse($id)
    {
        return Cache::remember(
            'channel-' . $id,
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

    private function getChannelDetails($id)
    {
        return Cache::remember(
            'channel-' . $id,
            now()->addWeek(),
            fn () => Youtube::getChannelById($id)
        );
    }

    private function updateChannelDetails($id): Channel
    {
        $channelDetails = $this->getChannelDetails($id);


        $channelData = [
            'id' => $channelDetails->id,
            'title' => $channelDetails->snippet->localized->title,
            'custom_url' => $channelDetails->snippet->customUrl ?? '',
            'meta' => json_encode($channelDetails),
        ];
        return (new AddChannel)->handle($channelData);
    }

    public function handle($id): Channel
    {
        // get channel details
        return $this->updateChannelDetails($id);
    }
}
