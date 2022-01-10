<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Meta buat SEO --}}
  <meta name="description" content="{{ $meta_desc ?? "Brebes Education Fair (BEF) merupakan kegiatan tahunan yang
  diselenggarakan oleh Himpunan Mahasiswa Kabupaten Brebes dari berbagai perguruan tinggi di
  Indonesia. Brebes Education ini sudah ada sejak tahun 2013, yang berarti tahun ini memasuki tahun
  ke-10 hadirnya BEF di Kabupaten Brebes." }}">
  <meta name="keywords" content="{{ $meta_keyword ?? "BEF , ITS, TryOut, brebes, SMA, Brebes Education Fair, brebes education fair, Brebes, bef, tryout bef, Education Fair, education fair, bef 1 dekade, bef 2022, BEF 2022" }}">
  <meta name="author" content="BEF 2021">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  @yield('stylesheet')

  <link rel="icon" href="{{ asset('img/svg/logo-bef.svg') }}">

  <title>BEF 2021 | {{ $title }}</title>
</head>

<body>

    <div class="scroll-up-btn">
        <i class="fa fa-arrow-up"></i>
    </div>

    @include('landing.navbar')

    <div>
        @yield('content')
    </div>

    @include('landing.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({disable: 'mobile'});
    </script>
    {{-- <script async src="https://www.instagram.com/embed.js"></script>
    <script async src="https://www.tiktok.com/embed.js"></script> --}}
    <script src="{{ asset('js/landing/script.js') }}"></script>
    @yield('script')
  </body>

</html>

