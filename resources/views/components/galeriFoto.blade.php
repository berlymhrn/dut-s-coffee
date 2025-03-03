@props([
    'image1' => '',
    'title1' => '',
    'image2' => '',
    'title2' => '',
    'image3' => '',
    'title3' => '',
    'image4' => '',
    'title4' => '',
    'image5' => '',
    'title5' => '',
])

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
            <img src="{{ $image1 }}" alt="gallery"
                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl">
                {{ $title1 }}</h3>
        </a>
    </div>
    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
            <img src="{{ $image2 }}" alt="gallery"
                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl">
                {{ $title2 }}</h3>
        </a>
        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                <img src="{{ $image3 }}" alt="gallery"
                    class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl">
                    {{ $title3 }}</h3>
            </a>
            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                <img src="{{ $image4 }}" alt="gallery"
                    class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl">
                    {{ $title4 }}</h3>
            </a>
        </div>
    </div>
    <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
            <img src="{{ $image5 }}" alt="gallery"
                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl">
                {{ $title5 }}</h3>
        </a>
    </div>
</div>
