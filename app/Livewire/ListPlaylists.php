<?php

namespace App\Livewire;

use App\Models\Show;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ListPlaylists extends Component
{

    public string $title;
    public Collection $playlists;


    protected function getPlaylists()
    {
        return $this->playlists;
    }

    public function render()
    {
        return view('livewire.list-playlists', [
            'playlists' => $this->getPlaylists(),
        ]);
    }
}
