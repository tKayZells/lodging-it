
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
    <tr>
        @foreach ($headers as $hr)
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            {{ $hr }}
        </th>
        @endforeach
        <th scope="col" class="relative px-6 py-3">
            <span class="sr-only">Edit</span>
        </th>
    </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        {{ $slot }}
    </tbody>
</table>