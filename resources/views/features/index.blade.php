<x-app-layout header="Features">
    <div class="flex flex-row-reverse">
        <a href="{{ route('features.add') }}" class="px-4 py-2 mb-4 bg-gray-700 text-white rounded-md transition duration-400 ease hover:bg-gray-500"> 
            <i class="fas fa-plus"></i>
            <span class="pl-2">New Feature </span>
        </a>
    </div>
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
                    <div class="text-sm text-gray-900">{{ $feature->caption }}</div>
                </td>

                <td class="px-6 py-4 whitespace-normal ">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10" src="{{ asset($feature->storage) }}" alt="{{ $feature->caption }}">
                    </div>
                </div>
                </td>
                <td class="px-6 py-4 whitespace-normal ">
                    <div class="text-sm text-gray-900">{{ $feature->order }}</div>
                </td>
                <td class="px-6 py-4 whitespace-normal  text-right text-sm font-medium">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td>
            </tr>
        @endforeach
    </x-table>
    <div class="flex justify-center text-gray-700 text-sm border-t px-4 pt-4">
        <a href="#" class="mx-4 text-gray-400">  <span>Previous</span> </a>
        <div class="flex text-center">
            <a href="#" class=" w-5 mx-2 text-gray-400"> 1 </a>
            <a href="#" class=" w-5 mx-2 border-t-2 border-gray-700"> 2 </a>
            <a href="#" class=" w-5 mx-2"> 3 </a>
            <span > ... </span>
            <a href="#" class=" w-5 mx-2"> 10 </a>
            <a href="#" class=" w-5 mx-2"> 9 </a>
            <a href="#" class=" w-5 mx-2"> 8 </a>
        </div>
        <a href="#" class="mx-4">  <span>Next</span> </a>
    </div>
</x-app-layout>