<div>

    @foreach ($playlists as $playlist)
        <x-playlist :playlist="$playlist" />
    @endforeach

</div>
