<x-wrapper>
    <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white mb-10">
        Videos of <span class="underline decoration-blue-500">{{ $this->title }}</span>
    </h1>
    <x-videos.index :videos="$videos" />
</x-wrapper>
