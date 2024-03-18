<div
    class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
    <div class="flex flex-col sm:-mx-4 sm:flex-row">
        <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
            alt="">

        <div class="mt-4 sm:mx-4 sm:mt-0">
            <h1 class="text-md font-semibold text-gray-700 capitalize md:text-md dark:text-white group-hover:text-white">
                {{ $video->title }}</h1>
        </div>
    </div>
    <hr class="mt-5">
    <div>
        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Playlist:
            {{ $video?->playlists?->first()?->title }}</p>

        <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
    </div>

</div>
