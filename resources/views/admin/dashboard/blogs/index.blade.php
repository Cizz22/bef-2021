@extends('layouts.app', ['title' => 'Campaign - Admin Page'])

@section('content')

<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container mx-auto py-6 px-8">
        <div class="flex items-center">
            <button class="font-bold rounded-md text-white bg-gray-600 py-2 px-4 hover: outline-none ">
                <a href="{{route('admin.blogs.tambah')}}">TAMBAH</a>
            </button>
        </div>

        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-sm rounded-lg overflow-hidden">
                <table id="tabel" class="min-w-full table-auto">
                    <thead class="justify-between">
                        <tr class="bg-gray-600 w-full">
                            <th class="px-16 py-2">
                                <span class="text-white">No</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class="text-white">Judul</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class="text-white">Status</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class="text-white">Tanggal dibuat</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class="text-white">Action</span>
                            </th>
                        </tr>
                    </thead>
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
                serverside:true,
                responsive:true,
                columnDefs: [
                    {"className": "dt-center", "targets": "_all"}
                ],
                ajax: {
                    url: "{{route('admin.blogs.index')}}"
                },
                columns:
                [
                    {
                    "data":null, "sortable":false,
                    render: function(data,type,row,meta){
                        return meta.row + meta.settings._iDisplayStart + 1
                    }
                },
                {data:'title', name:'title'},
                {data:'status', name:'status',  orderable:false},
                {data:'created_at', name:'created_at', orderable:false},
                {data:'action', name:'action', searchable:false, orderable:false}
                ]
            })
        })

    </script>

<script>
    //ajax delete
async function destroy(id) {
        const token = $("meta[name='csrf-token']").attr("content");
        Swal.fire({
            title: 'APAKAH KAMU YAKIN ?',
            text: "Ingin Menghapus Artikel Ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'BATAL',
            confirmButtonText: 'YA, HAPUS!',
        }).then((result) => {
            if (result.isConfirmed) {
                //ajax delete
                jQuery.ajax({
                    url: `blogs/delete/${id}`,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        })
    }
// </script>
@endpush
<script>
    //ajax delete
async function destroy(id) {
        const token = $("meta[name='csrf-token']").attr("content");

        Swal.fire({
            title: 'APAKAH KAMU YAKIN ?',
            text: "INGIN MENGHAPUS DATA INI!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'BATAL',
            confirmButtonText: 'YA, HAPUS!',
        }).then((result) => {
            if (result.isConfirmed) {
                //ajax delete
                jQuery.ajax({
                    url: `/admin/campaign/${id}`,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
                });
            }
        })
    }
// </script>

@endsection
