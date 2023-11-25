@extends('layouts.user.template')

@section('start-banner')
<section class="generic-banner relative" style="background: url(/assets-user/img/banner2.png);background-size: cover;">
@endsection

@section('end-banner')
<div class="container">
    <div class="row height align-items-center justify-content-center">
        <div class="col-lg-10">
            <div class="generic-banner-content">
                <h2 class="text-white">Ada Apa di Desa Wisata Bejiharjo?</h2>
                <p class="text-white">Temukan artikel-artikel menarik di website kami!</p>
            </div>							
        </div>
    </div>
</div>
</section>
@endsection

@section('content')
    <!-- Start about Area -->
    <section class="info-area" id="about">
        <div class="container">				
            <div class="single-info row" data-aos="fade-up">
                <div class="col-lg-12 col-md-12 no-padding">
                    <div class="content-tour info-content">
                        <h2 style="text-align: center">{{ $artikel->title }}</h2>
                        <p>{{ $artikel->author }}</p>
                        <p style="text-align: center; paading-top:10px"><i>{{ $artikel->updated_at }}</i></p><br>
                        <img src="{{asset('thumb/'.$artikel->image) }}" class="img-fluid rounded-4 mb-3" alt="">
                        <p> {!! $artikel->desc !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about Area -->
@endsection