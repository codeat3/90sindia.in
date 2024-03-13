<?php

namespace App\View\Components;

use App\Models\Playlist as ModelsPlaylist;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Playlist extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ModelsPlaylist $playlist,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.playlist');
    }
}
