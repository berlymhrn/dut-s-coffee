@props(['image' => '', 'title' => ''])

<div class="relative">
    <img src="{{ $image }}" alt="menu dut`s coffee" class="rounded-lg w-64 h-64 object-cover brightness-50" />
    <h3
        class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center text-white font-bold text-2xl text-center capitalize mx-3">
        {{ $title }}</h3>
</div>
