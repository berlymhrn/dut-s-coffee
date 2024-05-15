@props(['id' => '', 'title' => '', 'type' => ''])
<button type="{{ $type }}" id="{{ $id }}"
    class="mb-10 flex w-auto justify-center rounded-lg bg-secondaryColor hover:bg-amber-300 px-5 py-2 text-lg    font-bold leading-6 text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">
    {{ $title }}
</button>
