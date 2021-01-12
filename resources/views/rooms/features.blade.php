<x-app-layout header="Rooms">
    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">Select Features</p>
        <x-table :headers="$headers">
            @foreach ($features as $feature)
                <tr>
                    <td class="px-6 py-4 whitespace-normal ">
                        {{ $feature->id }}
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
                    <td class="px-6 py-4 whitespace-normal  text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    </td>
                </tr>
            @endforeach
        </x-table>
    </div>
</x-app-layout>