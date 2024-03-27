<div>
    @if ($this->show_id)
        <x-h2-title>
            Playlists of <span class="underline decoration-blue-500">{{ $this->title }}</span>
        </x-h2-title>
    @else
        <x-h1-title>
            Playlists of <span class="underline decoration-blue-500">{{ $this->title }}</span>
        </x-h1-title>
    @endif
    <section class="container px-10 mx-auto">
        <x-playlists.index :playlists="$playlists" />
    </section>
</div>
