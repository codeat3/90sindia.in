<?php

use App\Livewire\ShowPlaylist;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ShowPlaylist::class)
        ->assertStatus(200);
});
