@extends('landing.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/form.css') }}">
@endsection

@section('content')
<main>
    <div class="container">
        <h1 class="pt-5 mt-5 text-center">Form Pendaftaran BEF</h1>
        <form action="{{route('landing.pick-form')}}" method="GET" class="pt-5 shadow p-md-5 pt-sm-0">
            <h2 class="text-xl mt-12">Welcome to BEF 2022</h2>
            <p>
                Brebes Education Fair (BEF) merupakan kegiatan tahunan yang diselenggarakan oleh Himpunan Mahasiswa Kabupaten Brebes dari berbagai perguruan tinggi di Indonesia.
            </p>
            <div class="mb-3 form-group">
              <label for="kelas" class="form-label">Jenjang</label>
              <select class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="jenjang">
                <option value="">Pilih Jenjang</option>
                <option value="SMA">SMA/SMK Sederajat</option>
                <option value="Mahasiswa">Mahasiswa (Expo Campus)</option>
              </select>
                @error('jenjang')
                    <div class="mt-2 alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <button type="submit" class="mb-3 btn btn-primary ">Next</button>
          </form>
    </div>
</main>
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
@endsection
