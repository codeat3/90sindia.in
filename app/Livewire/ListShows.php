<?php

namespace App\Livewire;

use App\Models\Show;
use Livewire\Component;

class ListShows extends Component
{

    protected function getShows()
    {
        return Show::orderBy('name', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.list-shows', [
            'shows' => $this->getShows(),
        ]);
    }
}
