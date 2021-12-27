@extends('landing.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/blogs.css') }}">
<style>

.grid{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(25rem, 1fr));
    grid-row-gap: 30px;
}

</style>
@endsection


@section('content')
<main id="main">

    <section class="blogs">
      <div class="container">
        <h1 class="pb-5 text-center section-title">
          BEF BLOGS
        </h1>

        <div class="my-5 grid">
           @foreach ($blogs as $blog)
           <div class="text-center d-flex align-items-stretch justify-content-center">
            <a href="{{route('landing.post', $blog->id)}}" class="link-blogs">
              <div class="card d-flex" style="width: 20rem">
                <img src="{{ asset('storage/blogs/'.$blog->featured_image_path.'') }}" class="card-img-top" alt="{{$blog->title}}" />
                <div class="card-body d-flex flex-column">
                      <h5 class="mb-3 card-title">
                        {{$blog->title}}
                      </h5>
                      <p class="my-3 text-center card-text desc">
                        {!! \Illuminate\Support\Str::limit($blog->content, 150, $end='...') !!}
                      </p>
                  </div>
              </div>
            </a>
          </div>
           @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection
