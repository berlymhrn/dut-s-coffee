@extends('templates.user')
@section('title', 'Menu - Food')
@section('content')
    <div class="mx-12 md:mx-16 mt-12 md:mt-20">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Menu Makanan</h1>
        <div class="flex flex-wrap gap-5 justify-center" data-aos="fade-down" data-aos-duration="2000">
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbx-CJtF5cMDXAC15FQiEVqUBtpsaQDfO4hwVURpFiFA&s"
                title="kentang" />
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy7nQ-6LcZHNyTFg6qb258WX9zpHzGfXOOIFQg-yw-yQ&s"
                title="burger" />
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuvkrkubkaI9Ua78lTWK5FPyrqotpcXV2WanPq08LovQ&s"
                title="roti" />
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtOEw92CuT7jSiwrwHeeziv_qd6-ToYWoRCLvgIrV1qg&s"
                title="pancake" />
        </div>
    </div>
@endsection
