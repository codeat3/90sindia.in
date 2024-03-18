<?php

namespace App\View\Components\Shows;

use App\Models\Show as ModelsShow;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected ModelsShow $show
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shows.show', [
            'show' => $this->show
        ]);
    }
}
