@props(['name' => '', 'image' => '', 'position' => ''])

<div class="w-56 h-72 mb-5">
        <img src="{{ $image }}" alt=""
            class="rounded-lg w-full h-52 object-cover border-2 border-gray-200 shadow-md" />
        <h3 class="font-bold text-lg text-center mt-5">
            {{ $name }}</h3>
        <p class="font-extrabold text-gray-600 text-center text-lg">{{ $position }}</p>
</div>
