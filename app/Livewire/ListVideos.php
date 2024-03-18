<?php

namespace App\Livewire;

use App\Models\Video;
use Livewire\Component;

class ListVideos extends Component
{

    protected function getVideos()
    {
        return Video::with(['playlists'])
            ->inRandomOrder()
            // ->take(5)
            ->get();
    }
    public function render()
    {
        // dd($this->getVideos());
        return view('livewire.list-videos', [
            'videos' => $this->getVideos(),
        ]);
    }
}
