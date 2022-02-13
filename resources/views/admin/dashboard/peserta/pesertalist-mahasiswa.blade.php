@extends('layouts.app',["title" => "Dashboard-Page Admin"])

@section('content')
<main id="peserta" class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div x-data="{ showModal1: false }" class="container my-5 mx-auto rounded-sm py-6 px-8">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-sm rounded-lg overflow-hidden">
                <a href="{{route('export.mahasiswa')}}"> <button class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white mb-4 rounded">Export</button></a>
                    <table class="min-w-full table-auto hover " id="tabel">
                    <thead class="justify-between">
                        <tr class="bg-gray-600 w-full">
                            <th class="px-16 py-2">
                                <span class="text-white">No</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class="text-white">Nama</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class=" text-white">Asal Universitas</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="text-white ">No.Handphone</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="text-white ">Status</span>
                            </th>
                            <th class="px-8 py-2 ">
                                <span class="text-white ">Action</span>
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
            <div id="anggota_1" class="mt-4">
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
                        <p class="font-bold mb-0 mt-2">Asal Universitas</p>
                        <p id="school_name"></p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Instagram</p>
                        <p id="instagram"></p>
                    </div>
                    <div>
                        <p class="font-bold mb-0 mt-2">Bukti Pembayaran</p>
                            <a id="buktibayara" href="http://" target="_blank" rel="noopener noreferrer"><img id="buktibayar" class="object-scale-down w-2/3" src=""/></a>
                    </div>
                </div>
            </div>
            <hr class="my-4"/>

            <div class="flex flex-row justify-end">
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
        .tabletr td{
            margin-left: 20px!important;
        }

        input[type="search"]{
            background-color: white!important;
            margin-bottom: 10px
        }

        select[name="tabel_length"]{
            background-color: white!important;
        }

    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function(){
            $('#tabel').DataTable({
                index:false,
                serverside:true,
                responsive:true,
                columnDefs: [
                    {"className": "dt-center", "targets": "_all"}
                ],
                ajax: {
                    url: "{{route('admin.peserta.Expo')}}"
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
                {data:'school_name', name:'school_name' },
                {data:'whatsapp', name:'whatsapp'},
                {data:'payment_verif_status', name:'payment_verif_status'},
                {data:'action', name:'action', searchable:false, orderable:false}
                ]
            })
        })
        $('#peserta').on('click', '#detail-button', function (event) {
            event.preventDefault();
            const id = $(this).data('id');
            $.get(`detailPeserta/${id}`, function ({data}) {
                console.log(data)
                $('#name').text(data.name)
                $('#email').text(data.email)
                $('#no_hp').text(data.whatsapp)
                $('#info_source').text(data.info_source)
                $('#school_name').text(data.school_name)
                $('#instagram').text(data.instagram)
                $('#buktibayar').attr('src', `{{asset('storage/payment_proof/${data.payment_proof_path}')}}`)
                $('#buktibayara').attr('href', `{{asset('storage/payment_proof/${data.payment_proof_path}')}}`)
            })
});
    </script>


@endpush
@endsection

