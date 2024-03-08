<div class="w-full mx-auto bg-white border-b 2xl:max-w-7xl">
    <div x-data="{ open: false }"
        class="relative flex flex-col w-full p-5 mx-auto bg-white md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="flex flex-row items-center justify-between lg:justify-start">
            <a class="text-lg tracking-tight text-black uppercase focus:outline-none focus:ring lg:text-2xl"
                href="/">
                <span class="lg:text-lg uppecase focus:ring-0">
                    90sindia.in
                </span>
            </a>
            <button @click="open = !open"
                class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-black focus:outline-none focus:text-black md:hidden">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <nav :class="{ 'flex': open, 'hidden': !open }"
            class="flex-col flex-grow hidden py-10 md:flex lg:py-0 md:justify-end md:flex-row">
            <ul class="space-y-2 list-none md:space-y-0 md:items-center md:inline-flex">
                <li>
                    <a wire:navigate href="{{ route('shows.index') }}"
                        class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                        Shows
                    </a>
                </li>
                <li>
                    <a wire:navigate href="#"
                        class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 md:px-3 hover:text-blue-600 hover:border-blue-500">
                        Playlists
                    </a>
                </li>
                <li>
                    <a wire:navigate href="#"
                        class="px-2 py-8 text-sm text-gray-500 border-b-2 border-transparent lg:px-6 hover:border-blue-500 md:px-3 hover:text-blue-600">
                        Episodes
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
