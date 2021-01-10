<x-app-layout header="Rooms">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">New Room</p>
        <x-table :headers="$headers">
            @foreach ($specifics as $spe)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $spe->id }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $spe->identification }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $spe->floor }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $spe->extra_info }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">{{ $spe->status }}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
            @endforeach
        </x-table>
        <form method="POST" action="/rooms/add/specifics" class="p-4 m-2">
            @csrf
            <input type="hidden" name="room_id" value="{{ $id }}" />
            <div class="flex flex-row justify-center items-center">
                <div class="flex flex-col m-2 p-2">
                    <x-input inputname="identification" inputtype="text" inputtext="Identification"></x-input>
                </div>
                <div class="flex flex-col m-2 p-2">
                    <x-input inputname="floor" inputtype="text" inputtext="Floor"></x-input>
                </div>
                <div class="flex flex-col m-2 p-2">
                    <x-input inputname="extra_info" inputtype="text" inputtext="Extra info"></x-input>
                </div>
                <div class="m-2 p-2">
                    <button type="submit" class="px-4 py-2 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500">
                        <i class="fas fa-plus mr-2"></i>
                        Add
                    </button>
                </div>
            </div>
        </form>
        {{ $id }}
    </div>
</x-app-layout>