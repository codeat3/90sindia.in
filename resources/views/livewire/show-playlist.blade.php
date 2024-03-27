<div>
    <x-h1-title class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white mb-10">
        <span class="underline decoration-blue-500">{{ $playlist->title }}</span>
    </x-h1-title>
    <livewire:list-videos :title="$playlist->title" :playlist_id="$playlist->id" />
</div>
