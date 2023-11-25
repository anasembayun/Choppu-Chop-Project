@extends('layouts.user.template')
@section('start-banner')
<section class="generic-banner relative" style="background: url({{asset('thumb/'.$tourism->image) }});background-size: cover;">
@endsection

@section('end-banner')
<div class="container">
    <div class="row height align-items-center justify-content-center">
        <div class="col-lg-10">
            <div class="generic-banner-content">
                <h2 class="text-white">Wonderful {{$tourism->tourism_name}}</h2>
                <p class="text-white">Cari tahu tentang wisata {{$tourism->tourism_name}} sekarang juga!</p>
            </div>							
        </div>
    </div>
</div>
</section>
@endsection

@section('content')
    <!-- Start explore Area -->
    <section class="section-gap info-area" id="explore">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10" data-aos="fade-up">Wisata {{$tourism->tourism_name}} sebagai Destinasi Tujuan Anda</h1>
                        <p data-aos="fade-up">Wisata {{$tourism->tourism_name}} berlokasi di {{$tourism->location}}.</p>
                    </div>
                </div>
            </div>
            <!-- grid -->
            <div class="tours-container">
                @foreach($galleries as $data)
                <div class="tour-card" data-aos="fade-up">
                    <img src="{{asset('thumb/'.$data->image) }}" class="tour-img" alt="tour-image">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Start about Area -->
    <section class="info-area" id="about">
        <div class="container">				
            <div class="single-info row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 no-padding">
                    <div class="content-tour info-content">
                        <h2 style="text-align: center">Wisata {{$tourism->tourism_name}}</h2>
                        <p style="text-align: center; paading-top:10px"><i>{{$tourism->location}}</i></p><br>
                        <p>{!!$tourism->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about Area -->
    <br><br><br><br><br>

    <div class="container" data-aos="fade-up">
        <h3 class="about-title mb-30" style="text-align: center">Peta Lokasi {{$tourism->tourism_name}}</h3>
        <iframe src="{{$tourism->link_gmaps}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
    </div>
    <br><br><br><br><br>
@endsection