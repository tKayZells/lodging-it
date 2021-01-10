<x-app-layout header="Features">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">New Feature</p>    
        <form method="POST" action="/features/add" enctype="multipart/form-data" class="p-4 m-2 border rounded-md">
            @csrf
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="name" inputtype="text" inputtext="Name"></x-input>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="caption" inputtype="text" inputtext="Caption"></x-input>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="icon" inputtype="file" inputtext="Icon" accept="image/*"></x-input>
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