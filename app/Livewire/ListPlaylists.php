<?php

namespace App\Livewire;

use App\Models\Show;
use Livewire\Component;

class ListPlaylists extends Component
{

    public ?Show $show;

    protected function getPlaylists()
    {
        return $this->show->playlists()->get();
    }

    public function render()
    {
        return view('livewire.list-playlists', [
            'playlists' => $this->getPlaylists(),
        ]);
    }
}
