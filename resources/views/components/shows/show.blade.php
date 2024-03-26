<tr>
    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
        <div class="inline-flex items-center gap-x-3">

            <div class="flex items-center gap-x-2">

                <div>
                    <h2 class="font-bold text-lg text-gray-800 dark:text-white ">
                        <a href="{{ route('shows.show', ['slug' => $show->slug]) }}">
                            {{ $show->name }}
                        </a>
                    </h2>
                </div>
            </div>
        </div>
    </td>

</tr>
