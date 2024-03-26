<x-wrapper>
    <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white mb-10">
        List of <span class="underline decoration-blue-500">90s shows</span>
    </h1>
    <section class="container px-4 mx-auto">
        {{-- <div class="flex items-center gap-x-3">
            <h2 class="text-lg font-medium text-gray-800 dark:text-white">Shows</h2>

            <span class="px-3 py-1 text-xs text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400">100 users</span>
        </div> --}}

        <x-shows.index :shows="$shows" />


    </section>


</x-wrapper>
