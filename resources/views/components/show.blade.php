<figure class="border rounded-md shadow-md p-6">
    {{-- <img class="w-full bg-gray-200 " src="../images/placeholders/square3.svg" alt="" width="1310" height="873"> --}}

    <p class="mt-2 text-lg font-semibold leading-6 text-black">
        {{ $show->name }}
    </p>
    <p class="mt-3 text-base text-gray-500">

    </p>
    <div class="flex gap-3 mt-10 justify-left">
        <a class="inline-flex items-center justify-center text-sm font-semibold text-black duration-200 hover:text-blue-500 focus:outline-none focus-visible:outline-gray-600"
            href="{{ route('shows.show', ['slug' => $show->slug]) }}">
            <span> Read more &nbsp; → </span>
        </a>
    </div>
</figure>
