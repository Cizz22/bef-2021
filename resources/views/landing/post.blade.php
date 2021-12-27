@extends('landing.main',[''])

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/post.css') }}">
<style>
    p{
        word-wrap: break-word;
    }
    .title{
        word-wrap: break-word;
    }

</style>
@endsection

@section('content')
<main id="main">

    <section class="blog-page">
        <div class="container text-center">
            <div class="my-5 row">
                <h1 class="text-center title">
                 {{$post->title}}
                </h1>
            </div>
            <div class="my-5 row">
                <p><strong>Admin Bef</strong></p>
                <p>{{ Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</p>
            </div>
            <div class="my-5 row d-flex justify-content-center">
                <img src="{{ asset('storage/blogs/'.$post->featured_image_path.'') }}" class="img-fluid post-img" alt="">
            </div>

          <div class="col-md-12">
                        <div class="seo-text-block text-start">
                                {!! $post->content !!}
                        </div>
                    </div>
        </div>
    </section>

  </main>
@endsection
