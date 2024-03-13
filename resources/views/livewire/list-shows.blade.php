<section class="dark:bg-gray-900">
    <div class="container px-6 py-12 mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white mb-10">
            List of <span class="underline decoration-blue-500">90s shows</span>
        </h1>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-1 lg:grid-cols-1">
            @foreach ($shows as $show)
                <x-show :show="$show" />
            @endforeach
        </div>
    </div>
</section>
