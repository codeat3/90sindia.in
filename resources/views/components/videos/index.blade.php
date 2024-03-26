<div>
    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
        @foreach ($videos as $video)
            <x-videos.show :video="$video" />
        @endforeach
    </div>
    <div class="mt-10 mx-5">
        {{ $videos->links() }}
    </div>
</div>
