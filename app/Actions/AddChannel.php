<?php

namespace App\Actions;

use App\Sanitizers\VideoSourceSanitizer;
use App\Models\Channel;
use App\Models\Playlist;
use Illuminate\Support\Arr;

class AddChannel
{
    public function handle($data): Channel
    {

        $channel = Channel::firstOrNew(
            [
                'id' => Arr::get($data, 'id'),
            ]
        );

        $data = collect($data)
            ->filter(
                fn ($v) => !empty($v)
            )->toArray();

        $channel->fill($data);

        $channel->save();

        return $channel;
    }
}
