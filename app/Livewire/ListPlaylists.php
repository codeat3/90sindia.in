<?php

namespace App\Livewire;

use App\Models\Playlist;
use App\Models\Show;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class ListPlaylists extends Component
{
    public string $title = '90s shows';
    public string $show_id = '';

    protected function getPlaylists()
    {
        return Playlist::with(['channel'])
            ->orderBy('show_id')
            ->when($this->show_id, function ($query) {
                $query->where('show_id', $this->show_id);
            })
            ->oldest()
            ->paginate();
    }

    public function render()
    {
        return view('livewire.list-playlists', [
            'playlists' => $this->getPlaylists(),
            'title' => $this->title,
        ]);
    }
}
