<a {{ $attributes }} class="{{ $isRoute ? 'border-black font-bold bg-gray-300' : 'border-transparent hover:border-black' }} h-full pt-6 text-black-300 border-b-2 px-3 text-sm font-medium">
    {{ $slot }}
</a>