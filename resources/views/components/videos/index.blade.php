<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-3 xl:grid-cols-3">
    @foreach ($videos as $video)
        <x-videos.show :video="$video" />
    @endforeach
</div>
