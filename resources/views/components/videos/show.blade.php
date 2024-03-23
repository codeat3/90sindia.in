<div
    class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
    <div class="flex flex-col sm:-mx-4 sm:flex-row">
        <img class="flex-shrink-0 object-cover w-20 h-20 rounded-full sm:mx-4 ring-4 ring-gray-300"
            src="{{ $video->thumbnail }}"
            alt="">

        <div class="mt-4 sm:mx-4 sm:mt-0">
            <h1 class="text-md font-semibold text-gray-700 capitalize md:text-md dark:text-white group-hover:text-white">
                {{ $video->title }}</h1>
            <p class="mt-2 text-sm text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Playlist:
                {{ $video?->playlists?->first()?->title }}</p>
        </div>
    </div>
    <hr class="mt-5">
    <div class="text-sm">
        <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">
            {{ Str::of($video->description)->limit(100, ' ...') }}
        </p>
    </div>

</div>
