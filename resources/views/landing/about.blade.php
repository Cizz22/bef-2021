@extends('landing.main')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/landing/about.css') }}">
@endsection


@section('content')
    <header class="d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h1 class="text-center">Brebes Education Fair 2022</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="text-center col-md">
                    <a href="#main" class="hover" id="go-main">
                        <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main id="main">

        <section class="intro" data-aos="fade-up" data-aos-duration="1500">
            <div class="container d-flex flex-column align-items-center">
                <div class="row">
                    <h1 class="section-title">Kenalan Yuk!</h1>
                </div>
                <div class="row">
                    <img src="img/svg/logo-bef.svg" class="" height="150px" alt="logo-bef">
                </div>
                <div class="row">
                    <p class="px-5 text-center text-content">Brebes Education Fair (BEF) merupakan kegiatan tahunan yang
                        diselenggarakan oleh Himpunan Mahasiswa Kabupaten Brebes dari berbagai perguruan tinggi di
                        Indonesia. Brebes Education ini sudah ada sejak tahun 2013, yang berarti tahun ini memasuki tahun
                        ke-10 hadirnya BEF di Kabupaten Brebes.</p>
                </div>
                <div class="row">
                    <a href="#" class="main-btn">
                        Kepoin Lebih Lanjut!
                    </a>
                </div>
            </div>
        </section>

        <section class="sharing" data-aos="fade-up" data-aos-duration="1500">
            <div class="container">
                <div class="row">
                    <h1 class="text-center section-title">Sharing & Motivation</h1>
                </div>
                <div class="row">
                    <div class="text-center col-lg">
                        <img src="{{ asset('img/png/unknown_man.png') }}" width="150px" alt="">
                        <h4>Coming Soon</h4>
                        <p>...</p>
                    </div>
                    <div class="text-center col-lg">
                        <img src="{{ asset('img/png/unknown_woman.png') }}" width="150px" alt="">
                        <h4>Coming Soon</h4>
                        <p>...</p>
                    </div>
                    <div class="text-center col-lg">
                        <img src="{{ asset('img/png/unknown_man.png') }}" width="150px" alt="">
                        <h4>Coming Soon</h4>
                        <p>...</p>
                    </div>
                    <div class="text-center col-lg">
                        <img src="{{ asset('img/png/unknown_woman.png') }}" width="150px" alt="">
                        <h4>Coming Soon</h4>
                        <p>...</p>
                    </div>
                    <div class="text-center col-lg">
                        <img src="{{ asset('img/png/unknown_man.png') }}" width="150px" alt="">
                        <h4>Coming Soon</h4>
                        <p>...</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="expo-campus">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1500">
                    <h1 class="text-center section-title">Expo Campus</h1>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/ui.png" alt="ui">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/itb.png" alt="itb">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/ugm.png" alt="ugm">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/unair.png" alt="unair">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/its.png" alt="its">
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/ipb.png" alt="ipb">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/unbraw.png" alt="unbraw">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/undip.png" alt="undip">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/uns.png" alt="uns">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/unpad.png" alt="unpad">
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/unnes.png" alt="unnes">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/unsoed.png" alt="unsoed">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/utel.png" alt="utel">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/utidar.png" alt="utidar">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/umsurakarta.png" alt="umsurakarta">
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/uii.png" alt="uii">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/unissula.png" alt="unissula">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/uin.png" alt="uin">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/udinus.png" alt="udinus">
                    </div>
                    <div class="py-3 text-center col-md py-lg-0">
                        <img src="img/png/umyogyakarta.png" alt="umyogyakarta">
                    </div>
                </div>
            </div>
        </section>

        <section class="simulasi" data-aos="fade-up" data-aos-duration="1500">
            <div class="container d-flex flex-column align-items-center">
                <div class="row">
                    <h1 class="section-title">Try Out UTBK</h1>
                </div>
                <div class="row">
                    <p class="px-5 text-center text-content">BEF membantu memfasilitasi dengan mengadakan simulasi untuk
                        pelajar SMA/MA/K/sederajat dalam mempersiapkan Ujian Tulis Berbasis Komputer (UTBK) yang menjadi
                        syarat masuk perguruan tinggi melalui jalur SBMPTN. Try out ini dibagi menjadi dua kategori yaitu
                        SAINTEK dan SOSHUM dengan pelaksanakan sebagaimana UTBK yang sebenarnya. Pelaksanaan try out UTBK
                        serta pembahasan soal bekerjasama dengan Lembaga Bimbingan Belajar terpercaya yang berkompeten di
                        bidangnya.</p>
                </div>
                <div class="row">
                    <a href="#" class="main-btn">Kepoin Lebih Lanjut!</a>
                </div>
            </div>
        </section>

        <section class="form-daftar">
            <div class="container">
                <div class="my-5 row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <h2 class="text-center">Ayo buruan daftar sekarang juga dan raih PTN <br> impianmu....</h2>
                    </div>
                </div>
                <div class="my-5 row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="text-center col">
                        <a href="{{ route('landing.form') }}" id="btn-daftar">GAS</a>
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </section>

        <section class="sponsor">
            <div class="container">
                <div class="my-5 row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col">
                        <h1 class="text-center section-title">Media Partner & Sponsorship</h1>
                    </div>
                </div>
                <div class="py-5 text-center row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-md">
                        <img src="img/svg/logo-bef.svg" alt="">
                    </div>
                    <div class="col-md">
                        <img src="img/svg/logo-bef.svg" alt="">
                    </div>
                    <div class="col-md">
                        <img src="img/svg/logo-bef.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection

