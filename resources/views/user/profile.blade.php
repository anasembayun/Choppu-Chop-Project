@extends('layouts.user.template')

@section('start-banner')
<section class="generic-banner relative" style="background: url(/assets-user/img/banner1.png);background-size: cover;">
@endsection

@section('end-banner')
<div class="container">
    <div class="row height align-items-center justify-content-center">
        <div class="col-lg-10">
            <div class="generic-banner-content">
                <h2 class="text-white">Desa Wisata Bejiharjo <br> Tempat Terbaik Tujuan Liburan Anda!</h2>
                <p class="text-white">Jadikan Desa Wisata Bejiharjo sebagai tempat penghilang penat Anda!</p>
            </div>							
        </div>
    </div>
</div>
</section>
@endsection

@section('content')

<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Desa Wisata Bejiharjo </h1>
                    <p>Banyubening 2, Bejiharjo, Karangmojo, Gunungkidul</p>
                </div>
            </div>
        </div>					
        <div class="single-info row mt-40">
            <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                <div class="info-thumb">
                    <img src="{{asset('assets/images/bep-ver.jpeg')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">Desa Wisata Bejiharjo <br>
                    Permatanya Gunungkidul </h2>
                    <p>Desa Bejiharjo terletak di Kecamatan Karangmojo, Kabupaten Gunung Kidul, Yogyakarta. Desa ini memiliki potensi alam yang sangat menarik, terutama dalam hal sumber air, yang berbeda dari kebanyakan desa di wilayah Kabupaten Gunung Kidul yang kekurangan sumber air bersih. Desa Bejiharjo memperoleh pasokan air bersih sepanjang tahun dari sumber air bawah tanah yang ada di wilayahnya.
                    </p>
                    <p>Di Desa Bejiharjo, terdapat beberapa situs budaya dan warisan purbakala. Di bagian timur desa terdapat situs purbakala Sokoliman, sedangkan di bagian barat desa menjadi sentra kerajinan blangkon, dan di bagian tengah desa terdapat situs budaya langka, yaitu Wayang Beber.
                    </p>
                    <p>Desa Bejiharjo juga memiliki sebuah monumen yang menjadi saksi perang gerilya Panglima Besar Jenderal Sudirman, karena desa ini merupakan salah satu rute perang gerilya tersebut.
                    </p>
                    <p>Potensi alam Desa Bejiharjo sangat besar, terutama dalam hal sumber air bawah tanah. Selain itu, desa ini memiliki 12 gua alam yang unik, termasuk Gua Pindul yang menjadi maskot desa. Potensi alam dan wisata yang ada di Desa Bejiharjo menarik banyak wisatawan, baik dari dalam negeri maupun mancanegara.
                    </p>
                    <p>Desa Bejiharjo juga memiliki perkebunan kayu putih dan situs purbakala lainnya yang menjadi cagar budaya. Selain itu, desa ini menawarkan wisata kuliner yang beragam dan sentra kerajinan tangan, serta berbagai upacara adat dan kesenian yang beragam.
                    </p>
                    </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<!-- Start feature Area -->
<section class="feature-area" id="secvice">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Beberapa Hal yang Membuat Desa Wisata Bejiharjo Unik</h1>
                    <p>Berikut ini merupakan hal-hal yang membuat Desa Wisata Bejiharjo berbeda dari yang lain</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature mb-30">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-earth"></span>
                        <h4><a href="#">Desa Budaya Sejak Tahun 1995</a></h4>
                    </div>
                    <p>
                        Surat Keputusan Gubernur Propinsi Daerah Istimewa Yogyakarta Nomor: 325/KPTS/1995 tentang Penetapan 32 Desa sebagai Desa Bina Budaya.
                    </p>							
                </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature mb-30">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-license"></span>
                        <h4><a href="#">Diakui Secara Nasional</a></h4>
                    </div>
                    <p>
                        Desa ini pernah meraih predikat sebagai desa wisata terbaik oleh Kementrian Pariwisata dan Ekonomi Kreatif tahun 2012.
                    </p>							
                </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature mb-30">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-star"></span>
                        <h4><a href="#">Budaya yang Masih Kental</a></h4>
                    </div>
                    <p>
                        Desa ini sangat melestarikan budaya seperti tradisi agraris, kesenian, dan budaya.
                    </p>							
                </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-rocket"></span>
                        <h4><a href="#">Potensi Wisata Melimpah</a></h4>
                    </div>
                    <p>
                        Potensi wisata yang dimiliki yaitu meliputi wisata alam, sejarah, edukasi dan budaya.
                    </p>							
                </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-diamond"></span>
                        <h4><a href="#">Aneka Ragam Tradisi Agraris</a></h4>
                    </div>
                    <p>
                        Melestarikan aneka ragam tradisi agraris seperti: Bersih Kali, Bersih Desa atau Rasulan, Gumbregan, Ruwahan.
                    </p>							
                </div>							
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-feature">
                    <div class="title d-flex flex-row pb-20">
                        <span class="lnr lnr-leaf"></span>
                        <h4><a href="#">Wilayah Hutan Negara</a></h4>
                    </div>
                    <p>
                        25% wilayah desa ini berupa hutan negara dengan tanaman kayu putih. 
                    </p>							
                </div>							
            </div>																					
        </div>
    </div>	
</section>
<!-- End feature Area -->
<br><br><br><br><br>

<!-- Start Generic Area -->
<section class="about-generic-area pb-100">
    <div class="container border-top-generic">
        <h3 class="about-title mb-30">Sejarah Desa Bejiharjo</h3>
        <div class="row">
            <div class="col-lg-12">
                <p>Desa Bejiharjo merupakan salah satu desa yang terletak di Kecamatan Karangmojo, Kabupaten Gunung Kidul, Yogyakarta. Nama "Bedjiharjo" berasal dari dua kata, yaitu "bedji" yang berarti air, dan "Hardjo" yang berarti subur dan makmur. Dengan memilih nama ini, diharapkan Desa Bejiharjo dapat menjadi sumber kesejahteraan dan kemakmuran bagi penduduknya. Nama tersebut secara resmi diresmikan pada hari Sabtu pahing, tanggal 22 Desember 1949.</p>
                <p>Sebelum Proklamasi Kemerdekaan Republik Indonesia pada 17 Agustus 1945, terdapat tiga kelurahan di Desa Bejiharjo, yaitu:</p>
                <li>Kelurahan Kulwo, yang terdiri dari 6 Padukuhan: Kulwo, Ngringin, Gunungsari, Seropan, Gunungbang, dan Sokoliman dengan Lurah Mangun Utomo</li>
                <li>Kelurahan Banyubening, yang terdiri dari 7 Padukuhan: Banyubening, Karangmojo, Kedunggupit, Karanglor, Bulu, Bonjing, dan Gelaran dengan Lurah Hardjo Sutaso.</li>
                <li>Kalurahan Grogol, yang terdiri dari 6 Padukuhan: Grogol I, Grogol II, Grogol III, Grogol IV, Grogol V, dan Grogol VI dengan Lurah Sastro Tukidjo.</li>
                <p>Setelah Proklamasi Kemerdekaan Republik Indonesia pada tanggal 17 Agustus 1945, para sesepuh dan pemuda dari ketiga kelurahan berupaya untuk menggabungkan mereka menjadi satu kelurahan yang bernama Bejiharjo. Keputusan ini diambil dengan semangat persatuan dan kesatuan, dan mengesampingkan kelebihan masing-masing kelurahan.</p>
                <p>Desa Bejiharjo memiliki banyak penduduk dan wilayah yang luas dengan sumber daya alam yang mendukung, terutama air. Terdapat berbagai sumber air seperti Kali Oya, sumur-sumur, dan sumber air lainnya, yang diharapkan akan memberikan kesuburan, kemakmuran, dan kesejahteraan bagi wilayah dan penduduknya. Oleh karena itu, nama Bejiharjo dipilih untuk mencerminkan makna tersebut.</p>
                <p>Pada tahun 2013, tim penelusur Hari Jadi Bejiharjo menemukan bahwa kelurahan Bejiharjo mulai melaksanakan pemerintahan pada tanggal 11 Juni 1946, yang bertepatan dengan tanggal 11 Rejeb 1877 Ji atau 11 Rajab 1365 H. Hari Jadi Bejiharjo kemudian ditetapkan menjadi tanggal 11 Juni 1946 berdasarkan Peraturan Desa Bejiharjo Nomor 01 Tahun 2013 tanggal 8 Maret 2013.</p>
                <p>Sejak saat itu, Kelurahan Bejiharjo telah berkembang menjadi 20 Padukuhan, termasuk Grogol I hingga Grogol VI, Gunungsari, Kulwo, Ngringin, Banyubening I dan II, Karangmojo, Karanglor, Bulu, Gelaran I dan II, Gunungbang, Seropan, Sokoliman I dan II. Beberapa kepala desa yang memimpin Bejiharjo dari berdirinya hingga saat ini antara lain Djojo Deksono (1946-1949), Hardjo Sutaso (1949-1964), Suprijo (1964-1965), Luwarjana (1966-1996), Tukardjo (1996-2004), Yanto (2004-2014), dan Yanto (2015-2021).</p>
            </div>
        </div>
        <br>
        <h3 class="about-title mb-30">Visi dan Misi Desa Bejiharjo</h3>
        <div class="row">
            <div class="col-lg-12">
                <b>Visi</b>
                <p><i>"Terwujudnya masyarakat Desa bejiharjo yang maju, mandiri, berkarakter,berbudaya, religius, sejahtera dan berkeadilan"</i></p>
                <b>Misi</b>
                <p>Untuk mencapai visi diatas, maka dirumuskan misi Desa Bejiharjo untuk periode 2016-2021 sebagai berikut :</p>
                <li>Melanjutkan dan meningkatkan pembangunan desa.</li>
                <li>Memperkuat ekonomi kerakyatan dengan optimalisasi seluruh potensi sumber daya alam yang ada</li>
                <li>Memupuk dan melestarikan adat istiadat dan budaya asli desa.</li>
                <li>Mengembangkan kualitas kehidupan beragama bagi semua lapisan masyarakat dan meningkatkan toleransi antar umat beragama.</li>
                <li>Meningkatkan peran serta dan pemberdayaan masyarakat melalui penguatan dan pemerataan pembangunan berbasisi pembangunan padukuhan.</li>
                <li>Menciptakan penyelenggaraan pemerintahan desa yang transparan, akuntabel dan partisipatif.</li>
            </div>
        </div>
<br><br>
        <h3 class="about-title mb-30">Letak, Luas, dan Kondisi Geografis Desa Bejiharjo</h3>
        <div class="row">
            <div class="col-lg-12">
                <p>Desa Bejiharjo terletak di Kecamatan Karangmojo, Kabupaten Gunung Kidul. Secara geografis, desa ini berbatasan dengan Kecamatan Nglipar di utara, Desa Bendungan dan Desa Wiladeg di selatan, Kecamatan Wonosari di barat, serta Desa Wiladeg dan Desa Ngawis di timur. Luas wilayah Desa Bejiharjo adalah 1.825.4825 hektar. Berdasarkan data monografi, desa ini memiliki ketinggian tanah antara 100-250 meter di atas permukaan laut, curah hujan sekitar 180 mm, dan topografi yang mencakup dataran rendah dan bukit. Suhu udara rata-rata di desa ini sekitar 28 derajat Celsius.</p>
            </div>
        </div>
        <br>
        <h3 class="about-title mb-30">Peta Lokasi Desa Bejiharjo</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13965.362040481936!2d110.64362328392502!3d-7.928898547237787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4b486a84e2e9%3A0xab19e7b53f5ab59e!2sBalai%20Desa%20Bejiharjo!5e0!3m2!1sid!2sid!4v1691383145638!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>
<!-- End Generic Start -->	
<br><br><br><br><br>

@endsection