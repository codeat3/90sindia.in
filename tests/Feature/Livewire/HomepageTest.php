<?php

use App\Livewire\Homepage;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Homepage::class)
        ->assertStatus(200);
});
