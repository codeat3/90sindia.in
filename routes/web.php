<?php

use App\Livewire\Homepage;
use App\Livewire\ShowShow;
use App\Livewire\ListShows;
use App\Livewire\ListVideos;
use App\Livewire\ShowPlaylist;
use App\Livewire\ListPlaylists;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('homepage');

Route::get('/shows', ListShows::class)
    ->name('shows.index');
Route::get('/shows/{slug}', ShowShow::class)
    ->name('shows.show');

Route::get('/playlists', ListPlaylists::class)
    ->name('playlists.index');
Route::get('/shows/{showslug}/playlists/{slug}', ShowPlaylist::class)
    ->name('playlists.show');

Route::get('/videos', ListVideos::class)
    ->name('videos.index');
