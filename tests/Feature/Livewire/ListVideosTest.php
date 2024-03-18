<?php

use App\Livewire\ListVideos;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ListVideos::class)
        ->assertStatus(200);
});
