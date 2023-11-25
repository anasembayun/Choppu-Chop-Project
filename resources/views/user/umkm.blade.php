@extends('layouts.user.template')

@section('start-banner')
<section class="generic-banner relative" style="background: url(/assets-user/img/banner3.png);background-size: cover;">
@endsection

@section('end-banner')
<div class="container">
    <div class="row height align-items-center justify-content-center">
        <div class="col-lg-10">
            <div class="generic-banner-content">
                <h2 class="text-white">Produk Khas Bejiharjo? Kunjungi Toko Kami!</h2>
                <p class="text-white">Temukan produk-produk khas Desa Wisata Bejiharjo di toko kami!</p>
                <a href="#explore" class="text-uppercase header-btn">Discover Now</a>
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
                <div class="col-lg-4 mb-4">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('assets/images/basreng-1.jpg')}}" class="img-fluid rounded-4 mb-3" style="border-radius: 10px"
                                alt="">
                            <h3 class="fw-bold mb-3">Basreng Bang Toyib, Enak Gurih dan Renyah!</h3>
                            <p>Banyubening I, Bejiharjo, Karangmojo</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('assets/images/basreng-1.jpg')}}" class="img-fluid rounded-4 mb-3" style="border-radius: 10px"
                                alt="">
                            <h3 class="fw-bold mb-3">Basreng Bang Toyib, Enak Gurih dan Renyah!</h3>
                            <p>Banyubening I, Bejiharjo, Karangmojo</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('assets/images/basreng-1.jpg')}}" class="img-fluid rounded-4 mb-3" style="border-radius: 10px"
                                alt="">
                            <h3 class="fw-bold mb-3">Basreng Bang Toyib, Enak Gurih dan Renyah!</h3>
                            <p>Banyubening I, Bejiharjo, Karangmojo</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('assets/images/basreng-1.jpg')}}" class="img-fluid rounded-4 mb-3" style="border-radius: 10px"
                                alt="">
                            <h3 class="fw-bold mb-3">Basreng Bang Toyib, Enak Gurih dan Renyah!</h3>
                            <p>Banyubening I, Bejiharjo, Karangmojo</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('assets/images/basreng-1.jpg')}}" class="img-fluid rounded-4 mb-3" style="border-radius: 10px"
                                alt="">
                            <h3 class="fw-bold mb-3">Basreng Bang Toyib, Enak Gurih dan Renyah!</h3>
                            <p>Banyubening I, Bejiharjo, Karangmojo</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-4">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card-artikel">
                            <img src="{{asset('assets/images/basreng-1.jpg')}}" class="img-fluid rounded-4 mb-3" style="border-radius: 10px"
                                alt="">
                            <h3 class="fw-bold mb-3">Basreng Bang Toyib, Enak Gurih dan Renyah!</h3>
                            <p>Banyubening I, Bejiharjo, Karangmojo</p>
                        </div>
                    </a>
                </div>
            


        </div>
    </div>
</section>
{{-- Blog Artikel --}}
@endsection