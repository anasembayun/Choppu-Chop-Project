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
{{-- Blog Artikel --}}
<section id="blog">
    <div class="container col-xxl-10 py-5">
        <div class="row">
            @foreach ($artikels as $item)
                <div class="col-lg-4 mb-4">
                    <a href="/detail-artikel/{{ $item->id }}" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('thumb/'.$item->image) }}" class="img-fluid rounded-4 mb-3"
                                alt="">
                            <h3 class="fw-bold mb-3">{{ $item->title }}</h3>
                            <p>{{ $item->updated_at }}</p>
                        </div>
                    </a>
                </div>
            @endforeach


        </div>
    </div>
</section>
{{-- Blog Artikel --}}
@endsection