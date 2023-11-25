@extends('layouts.user.template')

@section('start-banner')
<section class="generic-banner relative">
@endsection



@section('end-banner')
</section>
@endsection

@section('content')
<!-- Start slider Area -->	
<section class="default-banner active-blog-slider">
    <div class="item-slider relative" style="background: url(/assets/images/img1.png);background-size: cover;">
        <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
        <div class="container">
            <div class="row fullscreen justify-content-center align-items-center">
                <div class="col-md-10 col-12">
                    <div class="banner-content text-center">
                        <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                        <h1 class="text-uppercase text-white">New Adventure</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                        or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <a href="#explore" class="text-uppercase header-btn">Discover Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="item-slider relative" style="background: url(/assets/images/img2-.png);background-size: cover;">
        <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
        <div class="container">
            <div class="row fullscreen justify-content-center align-items-center">
                <div class="col-md-10 col-12">
                    <div class="banner-content text-center">
                        <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                        <h1 class="text-uppercase text-white">New Trip</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                        or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <a href="#explore" class="text-uppercase header-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item-slider relative" style="background: url(/assets/images/img3.png);background-size: cover;">
        <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
        <div class="container">
            <div class="row fullscreen justify-content-center align-items-center">
                <div class="col-md-10 col-12">
                    <div class="banner-content text-center">
                        <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                        <h1 class="text-uppercase text-white">New Experience</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp <br>
                        or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                        <a href="#explore" class="text-uppercase header-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End slider Area -->	

<!-- Start explore Area -->
<section class="section-gap info-area" id="explore">
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-40 col-lg-8">
            <div class="title text-center">
                <h1 class="mb-10" data-aos="fade-up">Cari Destinasi yang Anda Inginkan!</h1>
                <p data-aos="fade-up">Kami memiliki banyak destinasi yang dapat menjadi tujuan Anda</p>
            </div>
        </div>
    </div>
    <!-- grid -->
    <div class="tours-container">
        @foreach($tourisms as $tourism)
        <div class="tour-card" data-aos="fade-up">
            <a href="detail-wisata/{{$tourism->id}}"><img src="{{asset('thumb/'.$tourism->image) }}" class="tour-img" alt="tour-image"></a>
            <div class="tour-body">
                <h4 class="tour-name">{{$tourism->tourism_name}}</h4>
                <p class="tour-action">{{$tourism->location}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>

<!-- Start project Area -->
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10" data-aos="fade-up">Kenapa Kami?</h1>
                    <p data-aos="fade-up">Kami memiliki keunggulan-keunggulan yang menjadi keunikan kami</p>
                </div>
            </div>
        </div>				
            <!-- services grid -->
        <div class="serives-grid">
            <div class="service-card" data-aos="fade-up">
                <div class="circle"></div>
                <i class="fa-solid fa-earth-americas card-icon"></i>
                <p class="service-text">Wisata populer Indonesia</p>
            </div>
            <div class="service-card" data-aos="fade-up">
                <div class="circle"></div>
                <i class="fa-solid fa-rocket card-icon"></i>
                <p class="service-text">Positif review & Highly Recomended</p>
            </div>
            <div class="service-card" data-aos="fade-up">
                <div class="circle"></div>
                <i class="fa-solid fa-book-open card-icon"></i>
                <p class="service-text">Beragam budaya lokal</p>
            </div>
            <div class="service-card" data-aos="fade-up">
                <div class="circle"></div>
                <i class="fa-solid fa-person-snowboarding card-icon"></i>
                <p class="service-text">Pengalaman seru dan menarik</p>
            </div>
        </div>
    </div>	
</section>
<!-- End project Area -->

<section class="section-gap info-area" id="gallery" style="padding:30px">
    <div class="container">
        <!-- grid -->
        <div class="travel-grid" id="travel">
            @foreach($galleries as $gallery)
            <img src="{{asset('thumb/'.$gallery->image)}}" data-aos="fade-up" alt="">
            @endforeach
            @foreach($tourisms as $tourism)
            <img src="{{asset('thumb/'.$tourism->image)}}" data-aos="fade-up" alt="">
            @endforeach
        </div>
    </div>
</section>

	<!-- start contact Area -->		
    <section class="contact-area section-gap" id="contact">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10" data-aos="fade-up">If you need, Just drop us a line</h1>
                        <p data-aos="fade-up">Hubungi kami dengan isi form berikut</p>
                    </div>
                </div>
            </div>										
            <form class="form-area" id="myForm" action="mail.php" method="post" class="contact-form text-right">
                <div class="row" data-aos="fade-up">	
                <div class="col-lg-6 form-group" >
                    <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                
                    <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                    <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                </div>
                <div class="col-lg-6 form-group">
                    <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                    <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                    <div class="alert-msg">								
                </div>
                </div></div>
            </form>						
            
        </div>	
    </section>
    <!-- end contact Area -->
@endsection