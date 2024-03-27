<div>
    <x-h1-title>
        List of <span class="underline decoration-blue-500">90s shows</span>
    </x-h1-title>
    <section class="container px-10 mx-auto">
        <div class="flex items-center gap-x-3">
            {{-- <h2 class="text-lg font-medium text-gray-800 dark:text-white">Shows</h2> --}}

            {{-- <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">100 users</span> --}}
        </div>

        <x-shows.index :shows="$shows" />

    </section>

</div>
