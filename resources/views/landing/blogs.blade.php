@extends('landing.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/blogs.css') }}">
@endsection


@section('content')
<main id="main">

    <section class="blogs">
      <div class="container">
        <h1 class="pb-5 text-center section-title">
          BEF BLOGS
        </h1>
        @forelse ($blogs as $blog)
        <div class="my-5 row">
            <div class="text-center col-lg-4 d-flex align-items-stretch justify-content-center">
              <a href="{{route('landing.post', $blog->id)}}" class="link-blogs">
                <div class="card d-flex" style="width: 20rem">
                  <img src="{{ asset('storage/blogs/'.$blog->featured_image_path.'') }}" class="card-img-top" alt="..." />
                  <div class="card-body d-flex flex-column">
                        <h5 class="mb-3 card-title">
                            {{$blog->title}}
                        </h5>
                        <p class="my-3 text-center card-text">
                            {!! \Illuminate\Support\Str::limit($blog->content, 50, $end='...') !!}
                        </p>
                    </div>
                </div>
              </a>
            </div>
        @empty
             <div class="text-center col-lg-4 d-flex align-items-stretch justify-content-center">
            <a href="#" class="link-blogs">
              <div class="card" style="width: 20rem">
                <img src="{{ asset('img/png/tugu-its.png') }}" class="card-img-top" alt="..." />
                <div class="card-body d-flex flex-column">
                      <h5 class="mb-3 card-title">
                        10 Jurusan Terlaris & Sepi Peminat SNMPTN ITS 2021
                      </h5>
                      <p class="my-3 text-center card-text">
                        Lembaga Tes Masuk Perguruan Tinggi (LTMPT) pun sudah akan mengumumkan kuota pada sekolah-sekolah yang memenuhi syarat ...
                      </p>
                  </div>
              </div>
            </a>
          </div>
          <div class="text-center col-lg-4 d-flex align-items-stretch justify-content-center">
            <a href="#" class="link-blogs">
              <div class="card" style="width: 20rem">
                <img src="{{ asset('img/png/ujian.png') }}" class="card-img-top" alt="..." />
                <div class="card-body d-flex flex-column">
                      <h5 class="mb-3 card-title">
                        Intip Persebaran Materi TPS dan TPA
                      </h5>
                      <p class="my-3 text-center card-text">
                        Pelaksanaan Ujian Tulis Berbasis Komputer- Seleksi Bersama Masuk Perguruan Tinggi Negeri (UTBK-SBMPTN) tidak selalu sama setiap tahunnya.
                      </p>
                  </div>
              </div>
            </a>
          </div>
        </div>
        <div class="my-5 row">
          <div class="text-center col-lg-4 d-flex align-items-stretch justify-content-center">
            <a href="#" class="link-blogs">
              <div class="card d-flex" style="width: 20rem">
                <img src="{{ asset('img/png/snmptn-2022.png') }}" class="card-img-top" alt="..." />
                <div class="card-body d-flex flex-column">
                      <h5 class="mb-3 card-title">
                        Simak Syarat SNMPTN 2022
                      </h5>
                      <p class="my-3 text-center card-text">
                        Kuota Seleksi Nasional Masuk Perguruan Tinggi atau SNMPTN tahun ini akan diumumkan. Berikut syarat lengkapnya ...
                      </p>
                  </div>
              </div>
            </a>
          </div>
          <div class="text-center col-lg-4 d-flex align-items-stretch justify-content-center">
            <a href="#" class="link-blogs">
              <div class="card" style="width: 20rem">
                <img src="{{ asset('img/png/tugu-its.png') }}" class="card-img-top" alt="..." />
                <div class="card-body d-flex flex-column">
                      <h5 class="mb-3 card-title">
                        10 Jurusan Terlaris & Sepi Peminat SNMPTN ITS 2021
                      </h5>
                      <p class="my-3 text-center card-text">
                        Lembaga Tes Masuk Perguruan Tinggi (LTMPT) pun sudah akan mengumumkan kuota pada sekolah-sekolah yang memenuhi syarat ...
                      </p>
                  </div>
              </div>
            </a>
          </div>
          <div class="text-center col-lg-4 d-flex align-items-stretch justify-content-center">
            <a href="#" class="link-blogs">
              <div class="card" style="width: 20rem">
                <img src="{{ asset('img/png/ujian.png') }}" class="card-img-top" alt="..." />
                <div class="card-body d-flex flex-column">
                      <h5 class="mb-3 card-title">
                        Intip Persebaran Materi TPS dan TPA
                      </h5>
                      <p class="my-3 text-center card-text">
                        Pelaksanaan Ujian Tulis Berbasis Komputer- Seleksi Bersama Masuk Perguruan Tinggi Negeri (UTBK-SBMPTN) tidak selalu sama setiap tahunnya.
                      </p>
                  </div>
              </div>
            </a>
          </div>
        @endforelse
        </div>
      </div>
    </section>

  </main>
@endsection
