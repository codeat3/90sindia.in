<div>
    {{-- <x-hero /> --}}
    <section class="flex items-center w-full bg-white">
        <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-20 max-w-7xl">

            <div class="grid grid-cols-2 gap-6 py-12 md:grid-cols-3">
                @foreach ($shows as $show)
                    <x-show :show="$show" />
                @endforeach
            </div>

        </div>
    </section>

</div>
