<div>
<div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-2">
    @foreach ($shows as $show)
        <x-shows.show :show="$show" />
    @endforeach

</div>
<div class="mx-auto">
    {{ $shows->links() }}
</div>
</div>
