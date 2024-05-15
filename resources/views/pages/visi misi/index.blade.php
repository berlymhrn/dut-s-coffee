@extends('templates.user')
@section('title', 'Visi Misi')

@section('content')

    <div class="mx-12 md:mx-16 mt-12 md:mt-20 ">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor" data-aos="fade-down" data-aos-duration="1000">visi misi dut`s coffee</h1>

        {{-- visi --}}
        <div class="flex flex-col md:flex-row gap-8 justify-start mt-20"  data-aos="fade-right" data-aos-duration="1000">
            {{-- image & background --}}
            <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10">
                <div
                    class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden">
                </div>
                <img src="https://d1r9hss9q19p18.cloudfront.net/uploads/2017/03/petani-kopi-sumber-cumakitadotcom.jpg" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            </div>

            {{-- visi text --}}
            <div class="md:ml-36">
                <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">Visi</h2>
                <div class="flex flex-col gap-4">
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                </div>
            </div>
        </div>

        {{-- misi --}}
        <div class="flex flex-col md:flex-row gap-8 justify-end mt-20"  data-aos="fade-left" data-aos-duration="1000">
            {{-- misi text --}}
            <div class="md:mr-40 order-2 md:order-1">
                <h2 class="uppercase font-black text-2xl md:text-3xl mb-5 text-primaryColor">misi</h2>
                <div class="flex flex-col gap-4">
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                    <x-check title="lorem ipsum dolor sit amet. lorem ipsum dolor sit amet. lorem ipsum dolor sit amet.lorem ipsum dolor sit amet" />
                </div>
            </div>
            {{-- image & background --}}
            <div class="relative mr-auto ml-auto md:mr-7 md:ml-0 mb-10 order-1 md:order-2">
                <div
                    class="bg-secondaryColor h-64 w-56 md:h-96 md:w-80 translate-x-5 translate-y-6 rounded-lg overflow-hidden">
                </div>
                <img src="https://img.freepik.com/premium-photo/tourists-visiting-city-drinking-coffee_23-2149374321.jpg?w=740" alt="visi misi"
                    class="w-56 h-64 md:h-96 md:w-80 object-cover absolute top-0 left-0 rounded-lg" />
            </div>
        </div>
    </div>

@endsection
