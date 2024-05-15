@extends('templates.user')
@section('title', 'Gallery')

@section('content')
    <div class="mx-12 md:mx-16 mt-12 md:mt-20">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Gallery</h1>
        <div data-aos="fade-down" data-aos-duration="2000">
             <x-galeriFoto 
            image1="https://img.freepik.com/premium-photo/tourists-visiting-city-drinking-coffee_23-2149374321.jpg?w=740"
            image4="https://asset.kompas.com/crops/fO-V0-C-V3BQ50xgKm_iwROeWSE=/34x24:475x318/750x500/data/photo/2021/08/05/610b6ce6b3440.jpg"
            image3="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYf_BSIO0lo_I7b-ke_rEs4fIn1Wdcp3bnyDm0Tm9sew&s"
            image2="https://d1r9hss9q19p18.cloudfront.net/uploads/2017/03/petani-kopi-sumber-cumakitadotcom.jpg"
            image5="https://img.freepik.com/free-photo/smiling-asian-girl-barista-giving-order-client-holding-takeaway-coffee-cup-wearing-apron-working_1258-138302.jpg" />
        </div>
        </div>
@endsection
