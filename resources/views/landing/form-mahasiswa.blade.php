@extends('landing.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/form.css') }}">
@endsection

@section('content')
<main>
    <div class="container">
        <h1 class="pt-5 mt-5 text-center">Form Pendaftaran BEF</h1>
        <form action="{{route('landing.form-store')}}" method="POST" enctype="multipart/form-data" class="pt-5 shadow p-md-5 pt-sm-0">
            @csrf
            <input type="hidden" name="jenjang" value="Mahasiswa">
            @if($errors->any())
            <div class="mt-2 alert alert-danger">
                    Terjadi kesalahan! Harap cek ulang isian Form Pendaftaran
            </div>
            @endif
            <div class="mb-3 form-group">
              <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama_lengkap" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
                @error('name')
                    <div class="mt-2 alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
              <label for="no_wa" class="form-label">Nomor Whatsapp</label>
              <input type="tel" class="form-control @error('whatsapp') is-invalid @enderror" id="no_wa" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="08********" >
                @error('whatsapp')
                    <div class="mt-2 alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}" name="email">
                @error('email')
                    <div class="mt-2 alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="instagram" class="form-label">Username Instagram</label>
                <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" value="{{ old('instagram') }}" placeholder="Username Instagram">
                @error('instagram')
                    <div class="mt-2 alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="asal_sekolah" class="form-label">Asal Universitas</label>
                <input type="text" class="form-control @error('universitas_name') is-invalid @enderror" id="asal_universitas" value="{{ old('universitas_name') }}" name="universitas_name" placeholder="Asal Universitas">
                @error('universitas_name')
                    <div class="mt-2 alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3 form-group">
                <label for="foto" class="form-label">Bukti Pembayaran</label>
                <div class="card">
                  <div class="card-header">
                    <input accept="image/*" type="file" class="form-control @error('payment_proof') is-invalid @enderror" id="foto" name="payment_proof" value="{{ old('payment_proof') }}" onchange="preview('buktiBayar')">
                  </div>
                  <div class="text-center card-body">
                      <img src="{{ asset('img/placeholder-image.png') }}" alt="foto-kamu" id="framebuktiBayar" class="img-fluid foto-kamu">
                  </div>
                </div>
                  @error('photo_path')
                      <div class="mt-2 alert alert-danger">
                          {{ $message }}
                      </div>
                  @enderror
              </div>
              <p>Dapat info BEF dari?</p>
              <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="teman" id="teman" name="info_source[]">
                <label class="form-check-label" for="teman">
                    Teman
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input" type="checkbox" value="grup_wa" id="grup_wa" name="info_source[]">
                  <label class="form-check-label" for="grup_wa">
                    Grup WA
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input " type="checkbox" value="instagram" id="instagram_bef" name="info_source[]">
                  <label class="form-check-label" for="instagram_bef">
                    Akun Instagram BEF
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input" type="checkbox" value="tiktok" id="tiktok" name="info_source[]">
                  <label class="form-check-label" for="tiktok">
                    Tiktok
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input"  type="checkbox" value="akun_info_tryout" id="akun_info_tryout" name="info_source[]">
                  <label class="form-check-label" for="akun_info_tryout">
                    Akun Informasi Tryout
                </label>
              </div>
              <button type="submit" class="mb-3 btn btn-primary ">Submit</button>
          </form>
          <!-- (Teman/grup WA/akun Instagram BEF/tiktok/akun informasi tryout)  -->
    </div>
</main>
@endsection

@section('script')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <script>
        function preview(type) {
            (type === 'photo' ? framephoto : framebuktiBayar).src=URL.createObjectURL(event.target.files[0]);
        }

        $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
    </script>
      <script>
        @if(session()->has('success'))

        Swal.fire({
            icon: 'success',
            title: 'BERHASIL!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @elseif(session()->has('error'))

        Swal.fire({
            icon: 'error',
            text: 'GAGAL!',
            title: '{{ session('error') }}',
            showConfirmButton: false,
            timer: 3000
        })

        @endif
    </script>
@endsection
