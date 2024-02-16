<?php

namespace App\Actions;

use App\Models\Video;
use App\Models\Channel;
use App\Models\Playlist;
use Illuminate\Support\Arr;
use App\Sanitizers\VideoSourceSanitizer;

class AddVideo
{
    public function handle($data): Video
    {

        $video = Video::firstOrNew(
            [
                'id' => Arr::get($data, 'id'),
            ]
        );

        $data = collect($data)
            ->filter(
                fn ($v) => !empty($v)
            )->toArray();

        $video->fill($data);

        $video->save();

        return $video;
    }
}
