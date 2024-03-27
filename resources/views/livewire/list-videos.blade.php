<div>
    @if ($this->playlist_id)
        <x-h2-title>
            Videos of <span class="underline decoration-blue-500">{{ $this->title }}</span>
        </x-h2-title>
    @else
        <x-h1-title>
            Videos of <span class="underline decoration-blue-500">{{ $this->title }}</span>
        </x-h1-title>
    @endif
    <section class="container px-10 mx-auto">
        <x-videos.index :videos="$videos" />
    </section>
</div>
