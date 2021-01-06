<a {{ $attributes }} class="{{ $isRoute ? 'text-white bg-gray-900' : 'text-black-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 rounded-md text-base font-medium">
    {{ $slot }}
</a>