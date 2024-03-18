<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-2">
    @foreach ($playlists as $playlist)
        <x-playlists.show :playlist="$playlist" />
    @endforeach
</div>
