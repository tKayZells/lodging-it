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
                    <a href="#" class="h-full pt-6 text-black-300 border-b-2 border-black font-bold bg-gray-300 px-3 text-sm font-medium">Dashboard</a>
                    <!-- {{ url('features') }} -->
                    <x-nav-link href="{{ route('features') }}" :is-route="request()->routeIs('features')" >Features</x-nav-link>
                    <x-nav-link href="{{ route('tests') }}" :is-route="request()->routeIs('tests')" >Test</x-nav-link>
                    <!-- <a href="{{ route('features') }}" class="h-full pt-6 text-black-300 border-b-2 border-transparent hover:border-black px-3 text-sm font-medium">Features</a> -->
                    <a href="#" class="h-full pt-6 text-black-300 border-b-2 border-transparent hover:border-black px-3 text-sm font-medium">Rooms</a>
                    <a href="#" class="h-full pt-6 text-black-300 border-b-2 border-transparent hover:border-black px-3 text-sm font-medium">Customers</a>
                    <a href="#" class="h-full pt-6 text-black-300 border-b-2 border-transparent hover:border-black px-3 text-sm font-medium">Orders</a>
                </div>
            </div>
            <!--
                MOBILE Menu
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
        MOBILE Menu
     -->
    <div class="hidden md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>
      </div>
    </div>
</nav>