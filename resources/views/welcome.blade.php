@extends('layouts.landingPage')


@section('content')
    <div class="grid md:grid-cols-2 container mx-auto">
        <div>
            <img src="{{ asset('assets/rumah.png') }}" alt="">
        </div>
        <div class="my-auto ">
            <div class="font-bold text-4xl">Cari kos yang nyaman dan terjangkau?
                <span class="text-blue-500">Darma Putra Kos </span>Solusinya
            </div>
            <div class="flex gap-4 flex-wrap  mt-4  ">
                <div class="">
                    <button
                        class="md:px-4 md:py-2 px-4 py-2 border-2 border-blue-500 text-white  bg-blue-500 rounded-lg hover:bg-blue-700 hover:text-white duration-100 font-semibold">Get
                        Started</button>
                </div>
                <div>
                    <button
                        class="px-4 py-2 border-2 border-blue-500  rounded-lg hover:bg-blue-600 hover:text-white duration-100 text-blue-500 font-semibold">Reservasi</button>
                </div>
            </div>
        </div>
    </div>
    @include('user.jumboTron')
    @include('user.fasiLita')
    @include('user.contAct')
    @include('user.fooTer')
@endsection
