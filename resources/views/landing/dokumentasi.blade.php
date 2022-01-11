@extends('landing.main')

@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/landing/dokumentasi.css') }}">
@endsection


@section('content')
    <main id="main">
        <section class="header-dokumentasi">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-xl">
                        <h1 class="section-title">BEF ONE DECADE</h1>
                    </div>
                </div>
                <div class="row text-center mb-5">
                    <div class="col-xl">
                        <img src="{{ asset('img/png/logo-bef-one-decade.png') }}" height="225px" alt="bef-one-decade">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">
                        <p class="text-content">
                            "One Decision for Realizing Your Dreams" atau "ONE DECADE" sebagai tema BEF 2022 dengan harapan
                            BEF yang ke-1 Dekade ini menjadi sahabat berjuang adik-adik SMA/sederajat yang membantu untuk
                            menentukan keputusan demi mewujudkan impian sehingga dapat menjadi manusia unggul demi kemajuan
                            Brebes pada masa mendatang.
                        </p>
                    </div>
                    <div class="text-center col-12">
                        <a href="#dokumentasi" class="hover" id="go-dokum">
                            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </section>


        <section class="dokumentasi" id="dokumentasi">
            <div class="container">
                <div class="row text-center mb-5">
                    <div class="col-xl">
                        <h1 class="section-title">DOKUMENTASI BEF</h1>
                    </div>
                </div>
                <div class="row">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills mb-3 d-flex justify-content-center align-items-center" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" id="dokumentasi-2020-list" role="presentation">
                            <button class="nav-link active" id="pills-dokumentasi-2020-tab" data-bs-toggle="pill"
                                data-bs-target="#dokumentasi-2020" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">2020</button>
                        </li>
                        <div class="separator mx-md-0 mx-3"></div>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-dokumentasi-2021-tab" data-bs-toggle="pill"
                                data-bs-target="#dokumentasi-2021" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">2021</button>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="dokumentasi-2020" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="my-5 grid">
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/1.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/2.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/3.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/4.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/5.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/6.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/7.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/8.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/9.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/10.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/11.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/12.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/13.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/14.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2020/15.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="dokumentasi-2021" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="my-5 grid">
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/1.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/2.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/3.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/4.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/5.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/6.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/7.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/8.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/9.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/10.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/11.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/12.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/13.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/14.png') }}" class="zoom" alt="">
                                </div>
                                <div class="text-center d-flex align-items-stretch justify-content-center">
                                    <img src="{{ asset('img/dokumentasi-2021/15.png') }}" class="zoom" alt="">
                                </div>
                                {{-- ====================== --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


@endsection
