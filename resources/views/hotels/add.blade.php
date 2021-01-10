<x-app-layout header="Hotels">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">New Hotel</p>
        <form method="POST" action="/hotels/add" class="p-4 m-2 border rounded-md">
            @csrf
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="name" inputtype="text" inputtext="Name"></x-input>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input-textarea inputname="description" inputtype="text" inputtext="Description"></x-input-textarea>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="country" inputtype="text" inputtext="Country"></x-input>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="city" inputtype="text" inputtext="City"></x-input>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="address" inputtype="text" inputtext="Address"></x-input>
            </div>
            <div class="flex flex-col m-2 p-2">
                <x-input inputname="phone" inputtype="text" inputtext="Phone"></x-input>
            </div>
            <div class="m-2 p-2">
                <button type="submit" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500">
                    <i class="fas fa-plus mr-2"></i>
                    Add Hotel
                </button>
            </div>
        </form>
</x-app-layout>