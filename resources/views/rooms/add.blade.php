<x-app-layout header="Rooms">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">New Room</p>
        <form method="POST" action="/rooms/add" enctype="multipart/form-data" class="p-4 m-2 border rounded-md">
            @csrf    
            <div class="md:grid md:grid-cols-3 md:gap-6 p-4 m-2">
                <div class="md:col-span-1 p-4 m-2">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Details</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Room information details some of witch are shared on the front page
                        </p>
                    </div>
                </div>
                <div class="md:col-span-2 p-4 m-2 border rounded-md">
                    <div class="flex flex-col m-2 p-2">
                        <x-input-select :values="$room_types" inputname="type" inputtext="Room Type"></x-input-select>
                    </div>
                    <div class="flex flex-col m-2 p-2">
                        <x-input-textarea inputname="description" inputtext="Room Description"></x-input-textarea>
                    </div>
                    <div class="flex flex-col m-2 p-2">
                        <x-input-select :values="$hotels" inputname="hotel_id" inputtext="Hotel"></x-input-select>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6 p-4 m-2">
                <div class="md:col-span-1 p-4 m-2">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Occupancy</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Number of guest that can be allocated
                        </p>
                    </div>
                </div>
                <div class="md:col-span-2 p-4 m-2 border rounded-md">
                    <div class="flex flex-col m-2 p-2">
                        <x-input inputname="adult_occupancy" min="1" inputtype="number" inputtext="Adult capacity"></x-input>
                    </div>
                    <div class="flex flex-col m-2 p-2">
                        <x-input inputname="child_occupancy" min="1" inputtype="number" inputtext="Child capacity"></x-input>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-3 md:gap-6 p-4 m-2">
                <div class="md:col-span-1 p-4 m-2">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Price</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Base price of the room, it dosnt include extra services that could be included on a reservation
                        </p>
                    </div>
                </div>
                <div class="md:col-span-2 p-4 m-2 border rounded-md">
                    <div class="flex flex-col m-2 p-2">
                        <x-input placeholder="0 $" inputname="base_price" min="1" inputtype="number" inputtext="Base price"></x-input>
                    </div>
                </div>
            </div>
            <div class="m-2 p-2 flex flex-row-reverse">
                <button type="submit" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500">
                    Next Step
                    <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </div>
        </form>
    </div>
</x-app-layout>