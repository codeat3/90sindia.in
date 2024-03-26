<div>
    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-8 xl:gap-8">
        @foreach ($playlists as $playlist)
            <x-playlists.show :playlist="$playlist" />
        @endforeach
    </div>
    <div class="mt-10 mx-5">
        {{ $playlists->links() }}
    </div>
</div>
