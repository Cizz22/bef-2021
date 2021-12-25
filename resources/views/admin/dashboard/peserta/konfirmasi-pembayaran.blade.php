@extends('layouts.app',["title" => "Dashboard-Page Admin"])

@section('content')
<main id="pembayaran" class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div x-data="{ showModal1: false }" class="container my-5 mx-auto rounded-sm py-6 px-8">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-sm rounded-lg overflow-hidden">
                <table class="min-w-full table-auto hover " id="tabel">
                    <thead class="justify-between">
                        <tr class="bg-gray-600 w-full">
                            <th class="px-4 py-2">
                                <span class="text-white">No</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class=" text-white">Nama</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class=" text-white">Email</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="text-white">No.Handphone</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="text-white">Bukti Pembayaran</span>
                            </th>
                            <th class="px-8 py-2 ">
                                <span class="text-white">Action</span>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div
        class="fixed inset-0 w-full h-full p-4 z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
        x-show="showModal1"
        x-transition:enter="transition duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        >
    <div
    class="mx-auto w-3/5 px-4 py-2 bg-white shadow-lg rounded-md text-gray-900"
    @click.away="showModal1 = false"
    x-show="showModal1"
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="scale-0"
    x-transition:enter-end="scale-100"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="scale-100"
    x-t
    >
    <div class="flex justify-between">
        <h4 class="text-lg font-weight-bold">Informasi Peserta</h4>
        <button type="button" title="Hapus" @click="showModal1 = false" class="self-start"><i
                class="fas fa-times"></i></button>
    </div>
    <hr/>
        <div id="anggota_1" class="mt-8">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Peserta</p>
                    <p id="name"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Sumber Informasi</p>
                    <p id="info_source"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Email</p>
                    <p id="email"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">No Telepon</p>
                    <p id="no_hp"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Alamat</p>
                    <p id="address"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Asal Sekolah</p>
                    <p id="school_name"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Kelas</p>
                    <p id="kelas"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Instagram</p>
                    <p id="instagram"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Institusi Pil Pertama</p>
                    <p id="ptn1"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jurusan Pilihan Pertama</p>
                    <p id="pil1"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Nama Institusi Pil Kedua</p>
                    <p id="ptn2"></p>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Jurusan Pilihan Kedua</p>
                    <p id="pil2"></p>
                </div>
                <div >
                    <p class="font-bold mb-0 mt-2">Foto Identitas</p>
                        <img id="photo" class="object-scale-down w-2/3" src=""/>
                </div>
                <div>
                    <p class="font-bold mb-0 mt-2">Bukti Pembayaran</p>
                        <a id="buktibayara" href="http://" target="_blank" rel="noopener noreferrer"><img id="buktibayar" class="object-scale-down w-2/3" src=""/></a>
                </div>
            </div>
        </div>
        <hr class="my-4"/>

        <div class="flex flex-row gap-2 justify-end">
            <button
                type="button" @click="showModal1 = false"
                class="text-gray border-2 border-gray-300 font-bold py-2 px-4 rounded-full mr-2" title="Tutup">
                Tutup
            </button>
        </div>
</div>
</div>


    </div>
</main>
@push('css')
    <style>
        input[type="search"]{
            background-color: white!important;
            margin-bottom: 10px
        }

        select[name="tabel_length"]{
            background-color: white!important;
        }
        th.dt-center, td.dt-center { text-align: center; }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function(){
            $('#tabel').DataTable({
                serverside:true,
                responsive:true,
                columnDefs: [
                    {"className": "dt-center", "targets": "_all"}
                ],
                ajax: {
                    url: "{{route('admin.konfirmasibayar.index')}}"
                },
                columns:
                [
                    {
                    "data":null, "sortable":false,
                    render: function(data,type,row,meta){
                        return meta.row + meta.settings._iDisplayStart + 1
                    }
                },
                {data:'name', name:'name'},
                {data:'email', name:'email',  orderable:false},
                {data:'whatsapp', name:'whatsapp', orderable:false},
                {data:'payment_proof_path', name:'payment_proof_path',orderable:false},
                {data:'action', name:'action', searchable:false, orderable:false}
                ]
            })
        })

        $('#pembayaran').on('click', '#detail-button', function (event) {
            event.preventDefault();
            const id = $(this).data('id');
            $.get(`detailPeserta/${id}`, function ({data}) {
                $('#name').text(data.name)
                $('#email').text(data.email)
                $('#no_hp').text(data.whatsapp)
                $('#info_source').text(data.info_source)
                $('#address').text(data.address)
                $('#school_name').text(data.school_name)
                $('#kelas').text(data.kelas)
                $('#instagram').text(data.instagram)
                $('#photo').attr('src', `{{asset('storage/photo_path/${data.photo_path}')}}`)
                $('#buktibayar').attr('src', `{{asset('storage/payment_proof/${data.payment_proof_path}')}}`)
                $('#buktibayara').attr('href', `{{asset('storage/payment_proof/${data.payment_proof_path}')}}`)
                $('#ptn1').text(data.pilihan_pertama.nama_universitas)
                $('#pil1').text(data.prodi_1)
                $('#ptn2').text(data.pilihan_kedua.nama_universitas)
                $('#pil2').text(data.prodi_2)
            })
});

    $('#pembayaran').on('click', '#check-button', function(e){
        e.preventDefault();
        const id = $(this).data('id');
        Swal.fire({
                title: 'Konfirmasi Pembayaran',
                text: "Apakah anda yakin?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'green',
                cancelButtonColor: 'grey',
                confirmButtonText: 'Ya,terima bukti pembayaran'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `terimaPembayaran/${id}`
  }
})
    })

    $('#pembayaran').on('click', '#times-button', function(e){
        e.preventDefault();
        const id = $(this).data('id');
        Swal.fire({
                title: 'Tolak Pembayaran',
                text: "Apakah anda yakin?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: 'grey',
                confirmButtonText: 'Ya,tolak bukti pembayaran'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `tolakPembayaran/${id}`
  }
})
    })
    </script>


@endpush

@endsection

