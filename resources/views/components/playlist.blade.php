<div>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-6xl px-6 py-10 mx-auto">
            <p class="text-xl font-medium text-gray-500 ">Testimonials</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">
                What clients saying
            </h1>

            <main class="relative z-20 w-full mt-8 md:flex md:items-center xl:mt-12">
                <div class="absolute w-full bg-gray-600 -z-10 md:h-96 rounded-2xl"></div>

                <div class="w-full p-6 bg-gray-600 md:flex md:items-center rounded-2xl md:bg-transparent md:p-0 lg:px-12 md:justify-evenly">
                    <img class="h-24 w-24 md:mx-6 rounded-full object-cover shadow-md md:h-[32rem] md:w-80 lg:h-[36rem] lg:w-[26rem] md:rounded-2xl" src="{{ Arr::get($playlist->meta, 'snippet.thumbnails.high.url') }}" alt="{{ $playlist->title }}" />

                    <div class="mt-2 md:mx-6">
                        <div>
                            <p class="text-xl font-medium tracking-tight text-white">{{ $playlist->title }}</p>
                            <p class="text-gray-200 ">Channel: {{ $playlist->channel->title }}</p>
                        </div>

                        <p class="mt-4 text-lg leading-relaxed text-white md:text-sm"> “{{ Str::of(Arr::get($playlist->meta, 'snippet.localized.description'))->limit(200, ' ...') }}”.</p>


                    </div>
                </div>
            </main>
        </div>
    </section>






    </div>
