<?php

namespace App\Livewire;

use App\Models\Show;
use Livewire\Component;

class ShowShow extends Component
{
    public string $slug;

    public function mount(string $slug)
    {
        $this->slug = $slug;
    }

    protected function getShow()
    {
        return Show::whereSlug($this->slug)
            ->first();
    }

    public function render()
    {
        return view('livewire.show-show', [
            'show' => $this->getShow(),
        ]);
    }
}
