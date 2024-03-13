<?php

namespace App\Actions;

use App\Sanitizers\VideoSourceSanitizer;
use App\Models\Channel;
use App\Models\Playlist;
use Illuminate\Support\Arr;

class AddPlaylist
{
    public function handle($data): Playlist
    {
        $playlist = Playlist::firstOrNew(
            [
                'id' => Arr::get($data, 'id'),
            ]
        );

        $data = collect($data)
            ->filter(
                fn ($v) => !empty($v)
            )->toArray();

        $playlist->fill($data);
        $playlist->save();

        return $playlist;
    }
}
