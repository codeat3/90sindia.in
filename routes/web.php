<?php

use App\Livewire\ListShows;
use App\Livewire\ShowShow;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/shows', ListShows::class)->name('shows.index');
Route::get('/shows/{slug}', ShowShow::class)->name('shows.show');
