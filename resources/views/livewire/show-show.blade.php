<section>
    <div class="container px-6 py-12 mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white mb-10">
            List of playlists of <span class="underline decoration-blue-500">{{ $show->name }}</span>
        </h1>
    </div>
    <livewire:list-playlists :title="$show->name" :playlists="$playlists" />
</section>
