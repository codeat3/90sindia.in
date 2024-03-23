<x-wrapper>
    <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white mb-10">
        <span class="underline decoration-blue-500">{{ $show->name }}</span>
    </h1>
    <livewire:list-playlists :title="$show->name" :show_id="$show->id" />
</x-wrapper>
