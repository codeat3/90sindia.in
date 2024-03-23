<div class="p-8 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
    <span class="hidden inline-block text-blue-500 dark:text-blue-400">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
        </svg>
    </span>

    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white  border-b border-gray-400">
        {{ $playlist->title }}
    </h1>
    <h2 class="text-md mt-1 font-semibold text-gray-500 capitalize dark:text-white mb-5">
        <span class="text-gray-400">Channel:</span> {{ $playlist->channel->title }}
        {{-- | <span class="text-gray-400">Videos:</span> {{ count($playlist->videos) }} --}}
    </h2>

    <p class="text-gray-500 dark:text-gray-300">
        {{ Str::of(Arr::get($playlist->meta, 'snippet.localized.description'))->limit(300, ' ...') }}
    </p>

    <a href="{{ route('playlists.show', ['slug' => $playlist->slug]) }}" class="mt-5 inline-flex p-2 text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </a>
</div>
