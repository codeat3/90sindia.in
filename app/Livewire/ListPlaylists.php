<?php

namespace App\Livewire;

use App\Models\Playlist;
use App\Models\Show;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ListPlaylists extends Component
{

    protected function getPlaylists()
    {
        return Playlist::orderBy('show_id')
            ->oldest()
            ->get();
    }

    public function render()
    {
        return view('livewire.list-playlists', [
            'playlists' => $this->getPlaylists(),
        ]);
    }
}
