<nav class="bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    Lodging it
                </div>
            </div>
            <div class="hidden md:block h-full">
                <div class="ml-4 flex items-center md:ml-6 h-full">
                    @foreach ($appLinks as $link)
                        <x-nav-link href="{{ route($link) }}" :is-route="request()->routeIs($link)" >{{ $link }}</x-nav-link>
                    @endforeach
                </div>
            </div>
            <!--
                MOBILE Open menu
            -->
            <div class="-mr-2 flex md:hidden">
                <button class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!--
        MOBILE Links
     -->
    <div class="hidden md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            @foreach ($appLinks as $link)
                <x-mobile-nav-link href="{{ route($link) }}" :is-route="request()->routeIs($link)" >{{ $link }}</x-nav-link>
            @endforeach
      </div>
    </div>
</nav>