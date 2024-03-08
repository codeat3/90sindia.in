
<section>
    <div class="items-center px-8 py-24 mx-auto lg:px-16 max-w-7xl md:px-12 xl:px-36">
      <ul class="w-full border-t divide-y border-mercury-300 divide-mercury-300" role="list">

        @foreach($playlists as $playlist)
            <x-playlist :playlist="$playlist" />
        @endforeach

      </ul>
    </div>
  </section>
