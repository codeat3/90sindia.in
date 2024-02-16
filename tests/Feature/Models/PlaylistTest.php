<?php

use App\Models\Playlist;
use App\Models\Show;
use Database\Factories\ShowFactory;

test('tests playlist model id and slug are being set correctly', function () {
    $playlist = Playlist::factory()->create([
        'name' => 'Swapnil Sarwe',
        'url' => 'http://youtu.be/playlist?list=ABCDEFGHIJKL'
    ]);
    expect($playlist->slug)->toBe('swapnil-sarwe');
    expect($playlist->id)->toBe('ABCDEFGHIJKL');
});

test('tests playlist model id is being set correctly', function () {
    $playlist = Playlist::factory()->create([
        'url' => 'http://youtu.be/playlist?list=ABCDEFGHIJKL123'
    ]);
    expect($playlist->id)->toBe('ABCDEFGHIJKL123');
});
