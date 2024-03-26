<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;

class ListVideos extends Component
{
    public string $title = '90s shows';

    public string $playlist_id = '';

    protected function getVideos()
    {
        return Video::with(['playlists'])
            ->when($this->playlist_id, function ($query) {
                $query->whereHas('playlists', function ($q) {
                    $q->where('playlist_id', $this->playlist_id);
                });
            }, function ($query) {
                $query->inRandomOrder();
            })
            ->paginate(10);
    }
    public function render()
    {
        // dd($this->getVideos());
        return view('livewire.list-videos', [
            'videos' => $this->getVideos(),
        ]);
    }
}
