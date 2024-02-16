<?php

use App\Models\Show;
use Database\Factories\ShowFactory;

test('tests show model slug is being set correctly', function () {
    $show = Show::factory()->create([
        'name' => 'Swapnil',
    ]);
    expect($show->slug)->toBe('swapnil');
});
