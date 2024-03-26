<?php

namespace App\Livewire;

use App\Models\Show;
use App\Models\Video;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Component;

class Homepage extends Component
{

    protected function getRandomShows(): Collection|LengthAwarePaginator
    {
        return Show::inRandomOrder()
            ->latest()
            ->limit(6)
            ->paginate();
    }

    public function render()
    {
        return view('livewire.homepage', [
            'shows' => $this->getRandomShows(),
        ]);
    }
}
