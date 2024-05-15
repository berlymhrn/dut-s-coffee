@extends('templates.user')
@section('title', 'Menu - Coffee')
@section('content')
    <div class="mx-12 md:mx-16 mt-12 md:mt-20">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Menu Kopi</h1>
        <div class="flex flex-wrap gap-5 justify-center" data-aos="fade-down" data-aos-duration="2000">
            <x-menu
                image="https://asset.kompas.com/crops/fO-V0-C-V3BQ50xgKm_iwROeWSE=/34x24:475x318/750x500/data/photo/2021/08/05/610b6ce6b3440.jpg"
                title="Kopi Susu" />
            <x-menu image="/assets/kopi2.jpg" title="Kopi Latte" />
            <x-menu image="https://cf.shopee.co.id/file/id-11134207-7qul1-lgrq5fjncw4rb6" title="kopi americano" />
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv04zN48iuCPHWpcyRZZvXwjUQwId3EdrghMHYHQMFOg&s"
                title="Kopi Macchiato" />
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYf_BSIO0lo_I7b-ke_rEs4fIn1Wdcp3bnyDm0Tm9sew&s"
                title="hazelnut latte" />
            <x-menu
                image="https://images.unsplash.com/photo-1592663527359-cf6642f54cff?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aWNlZCUyMGNvZmZlZXxlbnwwfHwwfHx8MA%3D%3D"
                title="lorem ipsum dolor sit amet" />
            <x-menu
                image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv04zN48iuCPHWpcyRZZvXwjUQwId3EdrghMHYHQMFOg&s"
                title="lorem ipsum dolor sit amet" />
            <x-menu image="https://images.unsplash.com/photo-1592663527359-cf6642f54cff?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aWNlZCUyMGNvZmZlZXxlbnwwfHwwfHx8MA%3D%3D"
                title="lorem ipsum dolor sit amet" />
        </div>
    </div>

@endsection
