<?php

use App\Models\Show;
use App\Models\Video;
use App\Models\Playlist;
use Database\Factories\ShowFactory;

test('tests video model id and slug are being set correctly', function () {
    $video = Video::factory()->create([
        'name' => 'Swapnil Sarwe',
        'url' => 'http://youtu.be/video?v=ABCDEFGHIJKL'
    ]);
    expect($video->slug)->toBe('swapnil-sarwe');
    expect($video->id)->toBe('ABCDEFGHIJKL');
});

test('tests video model id is being set correctly', function () {
    $video = Video::factory()->create([
        'url' => 'http://youtu.be/video?v=ABCDEFGHIJKL121'
    ]);
    expect($video->id)->toBe('ABCDEFGHIJKL121');
});
