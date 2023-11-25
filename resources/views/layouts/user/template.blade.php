<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-mini.svg') }}"> 
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Desa Wisata Bejiharjo</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('assets-user/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-user/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-user/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-user/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-user/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-user/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-user/css/main.css') }}">
    <!-- Animate on scroll CDN -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.css" />
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.0.1/dist/aos.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    @yield('style')
    </head>
    <body>
        @yield('start-banner')
        <!-- start header Area -->
        <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 56px;">
            <header class="default-header">
                <nav class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets/images/logo.svg') }}" width="90px" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="text-white lnr lnr-menu"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li><a href="{{ route('home') }}">Beranda</a></li>
                                    <li><a href="{{ route('profile') }}">Profil</a></li>									
                                    <!-- Dropdown -->
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Destinasi
                                        </a>
                                        <div class="dropdown-menu">
                                            @foreach ($tourisms as $item)
                                            <a class="dropdown-item" href="{{route('detail_tourism', $item->id)}}">{{$item->tourism_name}}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Artikel
                                        </a>
                                        <div class="dropdown-menu">
                                            @foreach ($categories as $item)
                                            <a class="dropdown-item" href="{{route('detail_artikel', $item->id)}}">{{$item->category}}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li><a href="{{route('umkm')}}">UMKM</a></li>
                                    
                                </ul>
                            </div>						
                    </div>
                </nav>
            </header>
        <!-- End header Area -->
        </div>
        @yield('end-banner')

        @yield('content')
        <!-- End explore Area -->
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Tentang kami</h6>
                            <p style="text-align: justify; padding-right:10px">Desa wisata Bejiharjo merupakan desa 
                            yang terletak di Kecamatan Karangmojo Kabupaten Gunungkidul.
                            Banyak potensi yang dimiliki
                            oleh Desa Bejiharjo, potensi itu meliputi
                            potensi alam, budaya,  sejarah dan edukasi.
                            Potensi yang dimiliki adalah Goa Pindul, 
                            Sungai Oya, Sendhang Beji, Telaga Mriwis,
                            Bejiharjo Edu Park, dll.</p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://instagram.com/kknugmkarangmojo" target="_blank">KKN-PPM UGM YO-097</a> | <br>All rights reserved</p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                    <div class="col-lg-5  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>BUMdes Maju Mandiri</h6>
                            <p>Banyubening I, Bejiharjo, Karangmojo, Gunung Kidul
                            Daerah Istimewa Yogyakarta 55891</p>
                            <p class="footer-text">Website - <a href="www.bumdesmajumandiri.id">www.bumdesmajumandiri.id</a>
                            <br>Email - bumdesmajumandirigk@gmail.com
                            <br>Handphone - 0852 2928 8282</p>
                            <br>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i><img src="{{asset('assets/images/logo-bumdes.svg')}}" width="35px" alt=""></i></a>
                                <a href="#"><i><img src="{{asset('assets/images/logo-kkn.svg')}}" width="35px" alt=""></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>		
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <img src="{{asset('assets/images/logo.svg')}}" width="250px" alt="">
                        </div>
                    </div>											
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->			

        <script src="{{ asset('assets-user/js/vendor/jquery-2.2.4.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="{{ asset('assets-user/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets-user/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets-user/js/jquery.magnific-popup.min.js') }}"></script>	
        <script src="{{ asset('assets-user/js/owl.carousel.min.js') }}"></script>			
        <script src="{{ asset('assets-user/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets-user/js/slick.js') }}"></script>
        <script src="{{ asset('assets-user/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets-user/js/waypoints.min.js') }}"></script>		
        <script src="{{ asset('assets-user/js/main.js') }}"></script>	
    </body>
</html>