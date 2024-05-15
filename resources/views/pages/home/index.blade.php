@extends('templates.user')
@section('title', 'Home')
@section('content')
    <x-heroSection />
    <div>
        <div class="bg-primaryColor w-full min-h-screen flex items-center">
            <div class="flex flex-col md:flex-row gap-5 justify-center items-center mx-16 mt-10">
                <img src="https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/12/06/4245992429.jpg"
                    class="w-64 h-56 md:w-96 md:h-80 object-cover rounded-lg" data-aos="fade-right" data-aos-duration="1000" />
                <div class="flex flex-col py-10" data-aos="fade-down" data-aos-duration="1000">
                    <h2 class="text-xl md:text-2xl text-start font-extrabold text-white mb-3 md:mb-10 uppercase">dibuat dari
                        kopi terbaik
                        dari seluruh
                        Indonesia</h2>
                    <p class="text-white font-semibold text-xl">
                        Kopi kami merupakan pilihan terbaik yang berasal dari petani-petani terbaik di seluruh
                        Indonesia. Dipetik dengan teliti dari kebun-kebun kopi terkemuka, biji kopi kami diproses dengan
                        standar yang ketat untuk menjaga kualitasnya. Kami menjalin kemitraan yang berkelanjutan dengan
                        para petani, memastikan praktik pertanian yang berkelanjutan dan adil. Dari Aceh hingga Papua,
                        kami menghadirkan kelezatan kopi Indonesia yang otentik, menggugah selera, dan merangkul
                        kekayaan budaya kopi tanah air. Dengan dedikasi kami untuk menjaga kualitas dan nilai-nilai
                        berkelanjutan, kami berkomitmen untuk menghadirkan pengalaman minum kopi yang luar biasa bagi
                        setiap pelanggan kami.</p>
                </div>

            </div>
        </div>

        <div class="mt-20 mx-12 md:mx-12 ">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-16 uppercase text-center" data-aos="fade-right"
                data-aos-duration="1000">proses yang kami lakukan</h2>
            <div class="flex flex-wrap gap-5 justify-center" data-aos="zoom-in" data-aos-duration="2000">
                <x-card1 image="https://d1r9hss9q19p18.cloudfront.net/uploads/2019/08/bibit-kopi.jpg"
                    title="Penanaman benih kopi" />
                <x-card1 image="https://d1r9hss9q19p18.cloudfront.net/uploads/2017/03/petani-kopi-sumber-cumakitadotcom.jpg"
                    title="pemilihan dan pemetikan biji kopi berkualitas" />
                <x-card1 image="https://d1r9hss9q19p18.cloudfront.net/uploads/2016/03/proses-kering.jpg"
                    title="pengeringan biji kopi" />
                <x-card1 image="https://uji.co.id/wp-content/uploads/Proses-Pembuatan-Kopi.jpg"
                    title="pengeringan biji kopi" />
                <x-card1 image="/assets/kopi3.jpg" title="penyeduhan kopi" />
                <x-card1
                    image="https://asset-2.tstatic.net/pontianak/foto/bank/images/CATAT-Waktu-Terbaik-Minum-Kopi-untuk-Kesehatan.jpg"
                    title="kopi berada ditangan konsumen" />
            </div>
        </div>

        <div class="mt-20 mx-12 md:mx-12">
            <h2 class="text-2xl md:text-3xl font-extrabold mb-16 uppercase text-center" data-aos="fade-right" data-aos-duration="1000"
                data-aos-duration="1000">Review pengunjung</h2>
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto" data-aos="fade-right" data-aos-duration="1000">
                <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 md:gap-20 md:grid-cols-3 lg:grid-cols-5 lg:gap-8">
                    <x-review
                        image="https://img.freepik.com/free-photo/people-emotions-lifestyle-leisure-beauty-concept-upbeat-happy-cheerful-asian-girl-dancing-having-fun-partying-moving-rhythm-music-smiling-yellow-background_1258-58916.jpg?t=st=1715744395~exp=1715747995~hmac=b717f7126287500174ff41117d31cdc5539c2ad6bd4d18f3cd26f4c2de043aa3&w=740"
                        review="'Latte art-nya keren dan rasanya enak!'">
                        <x-slot name="star">
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                        </x-slot>
                    </x-review>
                    <x-review
                        image="https://img.freepik.com/free-photo/business-finance-employment-female-successful-entrepreneurs-concept-friendly-smiling-office-manager-greeting-new-coworker-businesswoman-welcome-clients-with-hand-wave-hold-laptop_1258-59122.jpg?t=st=1715744759~exp=1715748359~hmac=e78971a267a93dfc50c90585c7aa12bf5b1bd001812c36250f2b04cb79d9a975&w=740"
                        review="'Tempatnya sangat nyaman'">
                        <x-slot name="star">
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                        </x-slot>
                    </x-review>
                    <x-review
                        image="https://img.freepik.com/free-photo/happy-asian-woman-using-mobile-phone-isolated-pink-background_74952-2860.jpg?t=st=1715744781~exp=1715748381~hmac=c8c4628f8a23cc8659363ca0f9de783e7d51f4cafb67cad572226809798e05e8&w=740"
                        review="'lorem ipsum dolor sit amet'">
                        <x-slot name="star">
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                        </x-slot>
                    </x-review>
                    <x-review
                        image="https://img.freepik.com/premium-photo/beautiful-asian-woman-casual-with-smile-cheerful-studio-shot-asian-woman-standing-hand-gesture_326694-18029.jpg?w=740"
                        review="'lorem ipsum dolor sit amet'">
                        <x-slot name="star">
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                        </x-slot>
                    </x-review>
                    <x-review
                        image="https://img.freepik.com/free-photo/shopping-concept-portrait-attractive-korean-girl-yellow-sweater-showing-promotion-offer-copy-space-pointing-looking-left-with-pleased-smile-blue-background_1258-76029.jpg?t=st=1715744881~exp=1715748481~hmac=6f1af553ac8bf590373c4d5a8b673d50ad9bf4030b68b10851c8438335628308&w=740"
                        review="'lorem ipsum dolor sit amet'">
                        <x-slot name="star">
                            <x-star />
                            <x-star />
                            <x-star />
                            <x-star />
                        </x-slot>
                    </x-review>
                </div>
            </div>
        </div>


    </div>
@endsection
