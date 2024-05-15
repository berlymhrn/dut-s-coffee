@extends('templates.user')
@section('title', 'Menu - Non Coffee')
@section('content')
    <div class="mx-12 md:mx-16 mt-12 md:mt-20">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Menu Non Kopi</h1>
        <div class="flex flex-wrap gap-5 justify-center" data-aos="fade-down" data-aos-duration="2000">
            <x-menu image="https://cdn.loveandlemons.com/wp-content/uploads/2023/06/iced-matcha-latte.jpg" title="matcha" />
            <x-menu
                image="https://images.unsplash.com/photo-1594489556673-c816408242f5?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8bWlsayUyMHRlYXxlbnwwfHwwfHx8MA%3D%3D"
                title="milk tea" />
            <x-menu
                image="https://www.almostsupermom.com/wp-content/uploads/2017/03/Cookies-and-Cream-Mocha-Milkshake-6-684x1024.jpg"
                title="cookies and cream" />
            <x-menu image="https://img.freepik.com/free-photo/cocoa-glass-table_23-2147985565.jpg" title="hazelnut" />
            <x-menu
                image="https://images.unsplash.com/photo-1571328003758-4a3921661729?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1pbGslMjBzaGFrZXxlbnwwfHwwfHx8MA%3D%3D"
                title="milkshake" />
            <x-menu image="https://yukorder.com/wp-content/uploads/2021/06/fuji-water-1500-ml-yukorder.jpg"
                title="air mineral" />
        </div>
    </div>
@endsection
