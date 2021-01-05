<x-app-layout header="Features">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 font-bold text-gray-700 capitalize">New Feature</p>    
        <form method="POST" action="/features/add" enctype="multipart/form-data" class="p-4 m-2 border rounded-md">
            @csrf
            <div class="flex flex-col m-2 p-2">
                <label class="block text-sm font-medium text-gray-500 py-2" for="name">Name</label>
                <input class="@error('name') border-red-500 @enderror p-2 mt-2 border text-gray-700 shadow-sm rounded-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" type="text" name="name" value="{{ old('name') }}" />
                @error('name')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="flex flex-col m-2 p-2">
                <label class="block text-sm font-medium text-gray-500 py-2" for="caption">Caption</label>
                <input class="@error('caption') border-red-500 @enderror p-2 mt-2 border text-gray-700 shadow-sm rounded-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" type="text" name="caption" value="{{ old('caption') }}" />
                @error('caption')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="flex flex-col m-2 p-2">
                <label class="block text-sm font-medium text-gray-500 py-2" for="icon">Icon</label>
                <input class="@error('icon') border-red-500 @enderror p-2 mt-2 border text-gray-700 shadow-sm rounded-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" type="file" name="icon" accept="image/*" />
                @error('icon')
                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="m-2 p-2">
                <button type="submit" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500">
                    <i class="fas fa-plus mr-2"></i>
                    Add Feature
                </button>
            </div>
        </form>
    </div>
</x-app-layout>