<?php

use App\Livewire\ListPlaylists;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ListPlaylists::class)
        ->assertStatus(200);
});
