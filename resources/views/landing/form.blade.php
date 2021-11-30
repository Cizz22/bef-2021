@extends('landing.main')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">
@endsection

@section('content')
<main>
    <div class="container">
        <h1 class="pt-5 mt-5 text-center">Form Pendaftaran BEF</h1>
        <form action="#" method="GET">
            <div class="mb-3">
              <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
              <label for="no_wa" class="form-label">Nomor Whatsapp</label>
              <input type="tel" class="form-control" id="no_wa" name="no_wa" placeholder="08********" >
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Username Instagram</label>
                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Username Instagram">
              </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Bebas Sopan</label>
                <input type="file" class="form-control" id="foto" name="foto">
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
              </div>
            <div class="mb-3">
              <label for="kelas" class="form-label">Kelas</label>
              <select class="form-control" id="kelas" name="kelas">
                <option value="">Pilih Kelas</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
              </div>
              <div class="mb-3">
                <label for="peminatan" class="form-label">Peminatan</label>
                <select class="form-control" id="peminatan" name="peminatan">
                  <option value="">Pilih Peminatan</option>
                  <option value="saintek">Saintek</option>
                  <option value="soshum">Soshum</option>
                  <option value="campuran">Campuran</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="pilihan_pertama" class="form-label">Pilihan Pertama</label>
                <input type="text" class="form-control" id="pilihan_pertama" name="pilihan_pertama" placeholder="PTN - Program Studi">
              </div>
              <div class="mb-3">
                <label for="pilihan_kedua" class="form-label">Pilihan Kedua</label>
                <input type="text" class="form-control" id="pilihan_kedua" name="pilihan_kedua" placeholder="PTN - Program Studi">
              </div>
              <p>Dapat info BEF dari?</p>
              <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="teman" id="teman" name="info_bef">
                <label class="form-check-label" for="teman">
                    Teman
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input" type="checkbox" value="grup_wa" id="grup_wa" name="info_bef">
                  <label class="form-check-label" for="grup_wa">
                    Grup WA
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input" type="checkbox" value="instagram" id="instagram_bef" name="info_bef">
                  <label class="form-check-label" for="instagram_bef">
                    Akun Instagram BEF
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input" type="checkbox" value="tiktok" id="tiktok" name="info_bef">
                  <label class="form-check-label" for="tiktok">
                    Tiktok
                </label>
              </div>
              <div class="mb-3 form-check">
                  <input class="form-check-input" type="checkbox" value="akun_info_tryout" id="akun_info_tryout" name="info_bef">
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
