<div>
    <x-h1-title>
        <span class="underline decoration-blue-500">{{ $show->name }}</span>
    </x-h1-title>
    <livewire:list-playlists :title="$show->name" :show_id="$show->id" />
</div>
