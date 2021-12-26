@extends('landing.main',[''])

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/post.css') }}">
@endsection

@section('content')
<main id="main">

    <section class="blog-page">
        <div class="container text-center">
            <div class="my-5 row">
                <h1 class="text-center">
                    10 Jurusan Terlaris & Sepi Peminat SNMPTN ITS 2021
                </h1>
            </div>
            <div class="my-5 row">
                <p><strong>Anonymous</strong></p>
                <p>Senin, 20 Desember 2021 17:30 WIB</p>
            </div>
            <div class="my-5 row d-flex justify-content-center">
                <img src="{{ asset('img/png/tugu-its.png') }}" class="img-fluid post-img" alt="">
            </div>
            <div class="my-5 row text-start">
                <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi veniam alias accusantium tenetur odit sint porro minus unde impedit. Enim animi cum nisi perferendis sint, suscipit deserunt hic repudiandae tempore quidem id dolore voluptatem libero porro minus minima officiis beatae. Repellendus quas mollitia quod alias nisi sapiente molestias assumenda minus! Molestiae illum nobis dolore magnam exercitationem error corrupti qui, quos in vero tenetur autem fugit perferendis, ut aliquid incidunt et aperiam. Adipisci reiciendis voluptatum debitis exercitationem, fugit tenetur ipsa nobis dolor. Magni quas repellat similique nam modi, culpa beatae blanditiis necessitatibus vitae, odio doloremque repudiandae at veritatis! Neque, quam odit.</p>
            </div>
        </div>
    </section>

  </main>
@endsection
