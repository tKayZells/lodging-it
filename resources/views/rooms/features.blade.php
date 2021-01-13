<x-app-layout header="Rooms">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">Select Features</p>
        @if ($errors->any())
            <div class="p-2 m-2 font-medium tracking-wide text-red-500 text-xs">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/rooms/add/features">
            @csrf    
            <input type="hidden" name="room_id" value="{{ $id }}" />
            <x-table :headers="$headers">
                @foreach ($features as $feature)
                    <tr>
                        <td class="px-6 py-4 whitespace-normal  text-right text-sm font-medium">
                            <input type="checkbox" 
                                name="features_id[]" 
                                value="{{ $feature->id }}" 
                                class="border-gray-300 p-2 border-2 text-black focus:border-gray-300 focus:ring-black" 
                                {{ in_array($feature->id, $sync_features) ? "checked" : "" }} />
                        </td>
                        <td class="px-6 py-4 whitespace-normal ">
                            <div class="text-sm text-gray-900">{{ $feature->name }}</div>
                        </td>

                        <td class="px-6 py-4 whitespace-normal ">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10" src="{{ asset($feature->storage) }}" alt="{{ $feature->caption }}">
                            </div>
                        </div>
                        </td>
                    </tr>
                @endforeach
            </x-table>
            <div class="m-2 p-2 flex flex-row-reverse">
                <a href="{{ route('room.images.add', $id) }}" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500">
                    Room Images
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>

                <button type="submit" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500 mr-2">
                    Attach Features
                </button>
            </div>
        </form>
    </div>
</x-app-layout>