@props(['title' => '', 'image' => ''])
<div class="w-64 md:w-72 h-auto">
    <img src="{{ $image }}" alt="" class="w-full h-56 md:h-72 rounded-lg object-cover">
    <p class="text-center font-bold text-xl capitalize mt-3">{{ $title }}</p>
</div>
