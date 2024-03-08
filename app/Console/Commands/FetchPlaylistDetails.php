<?php

namespace App\Console\Commands;

use App\Models\Playlist;
use Illuminate\Console\Command;
use App\Actions\ImportPlaylistDetails;
use App\Actions\ImportChannelDetailsAction;

class FetchPlaylistDetails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = '90:fetch-playlist-details';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Playlist::select(['id'])
            ->orderByDesc('id')
            ->each(function (Playlist $playlist) {
                $this->info('Playlist ID: ' . $playlist->id);
                (new ImportPlaylistDetails())->handle($playlist->id);
            });
    }
}
