<x-app-layout header="Rooms">

    <div class="flex justify-center flex-col">
        <p class="p-2 m-2 text-xl font-bold text-gray-700 capitalize">Upload Images</p>
        @if ($errors->any())
            <div class="p-2 m-2 font-medium tracking-wide text-red-500 text-xs">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <file-upload-component action="/rooms/add/images" >
            @csrf
            <input type="hidden" name="room_id" value="{{ $id }}" />
        </file-upload-component>
        <x-table :headers="$headers">
        </x-table>
    </div>
</x-app-layout>