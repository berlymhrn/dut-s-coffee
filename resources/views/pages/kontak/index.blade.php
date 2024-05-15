@extends('templates.user')
@section('title', 'Kontak - Kami')
@section('content')
    <div class="mx-12 md:mx-16 mt-12 md:mt-20">
        <h1 class="uppercase font-black text-2xl md:text-3xl text-center mb-14 text-primaryColor">Kontak Kami</h1>
        <div class="flex justify-center flex-col items-center">
            <form action="post">
                <div class="mt-4">
                    <label for="nama" class="block text-xl font-bold capitalize leading-6 text-gray-900">nama
                        lengkap</label>
                    <div class="mt-1">
                        <input id="nama" name="nama" type="text"
                            class="block w-96 rounded-lg py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-base sm:leading-6 border-2"
                            placeholder="Tuliskan Nama Anda">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="email" class="block text-xl font-bold capitalize leading-6 text-gray-900">email</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email"
                            class="block w-96 rounded-lg py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-base sm:leading-6 border-2"
                            placeholder="loremipsum@gmail.com" required>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="telp" class="block text-xl font-bold capitalize leading-6 text-gray-900">nomer
                        telepon</label>
                    <div class="mt-1">
                        <input id="telp" name="telp" type="tel"
                            class="block w-96 rounded-lg py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-base sm:leading-6 border-2"
                            placeholder="contoh : 0438927492" required>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="message" class="block text-xl font-bold leading-6 text-gray-900">Pesan Anda</label>
                    <textarea id="message" name="message" rows="4"
                        class="block w-96 rounded-lg py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-base sm:leading-6 border-2"
                        placeholder="Tuliskan Pesan Anda Disini"></textarea>
                </div>
                <div class="mt-6">
                    <x-button id="submitForm" type="submit" title="Kirim" />
                </div>
            </form>
        </div>
    </div>
@endsection
