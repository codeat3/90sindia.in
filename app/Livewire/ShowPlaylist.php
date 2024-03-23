<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Playlist;

class ShowPlaylist extends Component
{
    public string $slug;

    public function mount(string $slug)
    {
        $this->slug = $slug;
    }

    protected function getPlaylist()
    {
        return Playlist::whereSlug($this->slug)
            ->first();
    }

    public function render()
    {
        return view('livewire.show-playlist', [
            'playlist' => $this->getPlaylist(),
        ]);
    }
}
