<label class="block text-sm font-medium text-gray-500 py-2" for="{{ $inputname }}">{{ $inputtext }}</label>

<select {{ $attributes }} class="p-2 mt-2 p-2 mt-2 border text-gray-700 shadow-sm rounded-sm focus:outline-none focus:ring-2 focus:ring-black focus:border-transparent" 
    name="{{ $inputname }}" 
    value="{{ old($inputname) }}">
    @foreach($values as $val)
        <option value="{{ $val['val'] }}">{{ $val['text'] }}</option>
    @endforeach
</select>

@error($inputname)
<span class="flex items-center font-medium tracking-wide text-red-500 text-xs">
    {{ $message }}
</span>
@enderror