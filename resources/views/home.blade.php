@extends('template.master')
@section('judul_halaman', 'HALAMAN UTAMA | PRAKTIKUM WEB II')
@section('konten')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="25">
                <img src="{{ asset('/lib/img/rumah.jpg') }}" class="d-block w-100" width="200" height="400px">
            </div>
            <div class="carousel-item" data-bs-interval="25">
                <img src="{{ asset('/lib/img/blt.jpeg') }}" class="d-block w-100" width="200" height="400px">
            </div>
            <div class="carousel-item" data-bs-interval="25">
                <img src="{{ asset('/lib/img/barito.jpg') }}" class="d-block w-100" width="200" height="400px">
            </div>
        </div>
    </div>
@endsection
