<li class="py-4 lg:py-8">
    <div class="grid items-start grid-cols-1 gap-6 lg:grid-cols-3 lg:gap-24">
      <div class="lg:col-span-2 lg:order-last">
        <p class="text-base text-gray-500">
          {{ Str::of(Arr::get($playlist->meta, 'snippet.localized.description'))->limit(150, ' ...') }}
        </p>
      </div>
      <div class="inline-flex items-center gap-3">
        <div class="flex-shrink-0">
          <img alt="" class="object-cover w-10 h-10 rounded-full lg:h-16 lg:w-16" src="{{ Arr::get($playlist->meta, 'snippet.thumbnails.medium.url') }}">
        </div>
        <div class="flex-1 min-w-0">
          <p class="text-lg font-medium leading-6 text-black">
            {{ $playlist->title }}
          </p>
          <p class="text-sm text-gray-500">
            Channel: Channel Name
          </p>
        </div>
      </div>
    </div>
  </li>
