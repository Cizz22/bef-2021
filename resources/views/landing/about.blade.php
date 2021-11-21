@extends('landing.main')

@section('content')
  <header class="d-flex flex-column justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <h1 class="text-center">Brebes Education Fair 2022</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
          <div class="text-center col">
              <a href="#main">
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
          <img src="{{ asset('img/svg/logo-bef.svg') }}" class="border rounded-circle" alt="logo-bef">
        </div>
        <div class="row">
          <p class="text-center text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque enim eum
            alias blanditiis nobis doloribus ipsa eaque? Modi velit, eaque eos quae quibusdam saepe, repellat aut
            consequuntur sit deserunt labore. Aspernatur corporis repellat voluptate quam praesentium dolorum laborum
            tempora eum? Architecto ea culpa dolorum perspiciatis unde debitis, cupiditate voluptas tempore!</p>
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
          <div class="text-center col">
            <img src="{{ asset('img/svg/logo-bef.svg') }}" alt="">
            <h4>Ghifary Muhammad</h4>
            <p>Sistem Informasi ITS</p>
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/svg/logo-bef.svg') }}" alt="">
            <h4>Ghifary Muhammad</h4>
            <p>Sistem Informasi ITS</p>
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/svg/logo-bef.svg') }}" alt="">
            <h4>Ghifary Muhammad</h4>
            <p>Sistem Informasi ITS</p>
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/svg/logo-bef.svg') }}" alt="">
            <h4>Ghifary Muhammad</h4>
            <p>Sistem Informasi ITS</p>
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/svg/logo-bef.svg') }}" alt="">
            <h4>Ghifary Muhammad</h4>
            <p>Sistem Informasi ITS</p>
          </div>
        </div>
      </div>
    </section>


    <section class="expo-campus">
      <div class="container">
        <div class="row"  data-aos="fade-up" data-aos-duration="1500">
          <h1 class="text-center section-title">Expo Campus</h1>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
          <div class="text-center col">
            <img src="{{ asset('img/png/ui.png') }}" alt="ui">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/itb.png') }}" alt="itb">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/ugm.png') }}" alt="ugm">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/unair.png') }}" alt="unair">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/its.png') }}" alt="its">
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
          <div class="text-center col">
            <img src="{{ asset('img/png/ipb.png') }}" alt="ipb">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/unbraw.png') }}" alt="unbraw">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/undip.png') }}" alt="undip">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/uns.png') }}" alt="uns">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/unpad.png') }}" alt="unpad">
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
          <div class="text-center col">
            <img src="{{ asset('img/png/unnes.png') }}" alt="unnes">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/unsoed.png') }}" alt="unsoed">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/utel.png') }}" alt="utel">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/utidar.png') }}" alt="utidar">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/umsurakarta.png') }}" alt="umsurakarta">
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1500">
          <div class="text-center col">
            <img src="{{ asset('img/png/uii.png') }}" alt="uii">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/unissula.png') }}" alt="unissula">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/uin.png') }}" alt="uin">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/udinus.png') }}" alt="udinus">
          </div>
          <div class="text-center col">
            <img src="{{ asset('img/png/umyogyakarta.png') }}" alt="umyogyakarta">
          </div>
        </div>
      </div>
    </section>

    <section class="simulasi" data-aos="fade-up" data-aos-duration="1500">
      <div class="container d-flex flex-column align-items-center">
        <div class="row">
          <h1 class="section-title">Simulasi UTBK</h1>
        </div>
        <div class="row">
          <p class="text-center text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolores
            quidem, quas, voluptates, illum maiores unde repellat aperiam quaerat libero adipisci sunt dignissimos
            reiciendis cum distinctio nesciunt hic. Assumenda expedita laudantium quos iure? Dignissimos ducimus
            provident ullam tempora natus quas asperiores sequi maxime saepe voluptatem, a ipsam sapiente ad corrupti
            officiis. Omnis modi rem illo cum recusandae. Illo, cumque repellat vero dolorem dolor expedita excepturi
            facere quae est repellendus laborum magnam sint illum quo earum recusandae dicta. Doloremque explicabo sit
            mollitia recusandae exercitationem suscipit in magnam iure odit consequuntur molestias ab molestiae vitae
            atque corrupti, sint dicta. Optio, tempora hic?</p>
        </div>
        <div class="row">
          <a href="#" class="main-btn">Kepoin Lebih Lanjut!</a>
        </div>
      </div>
    </section>

  </main>

  @endsection



