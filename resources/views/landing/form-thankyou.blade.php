@extends('landing.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/form.css') }}">
@endsection

@section('content')
<main>
    <div class="container">
        <div class="pt-5 shadow p-md-5 pt-sm-0">
            <h1 class="pt-5 mt-5 text-center">Thank you for registering!</h1>
            <p class="text-center mx-2">
                Tunggu info selanjutnya dari kami.
            </p>
        </div>
    </div>
</main>
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
@endsection
