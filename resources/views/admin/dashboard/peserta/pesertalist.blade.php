@extends('layouts.app',["title" => "Dashboard-Page Admin"])

@section('content')
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-300">
    <div class="container my-5 mx-auto rounded-sm py-6 px-8">
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-sm rounded-lg overflow-hidden">
                <table class="min-w-full table-auto hover " id="tabel">
                    <thead class="justify-between">
                        <tr class="bg-gray-600 w-full">
                            <th class="px-16 py-2">
                                <span class="flex text-white">No</span>
                            </th>
                            <th class="px-16 py-2">
                                <span class="flex text-white">Nama</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="flex text-white">Email</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="text-white flex">No.Handphone</span>
                            </th>
                            <th class="px-16 py-2 ">
                                <span class="text-white flex">Status</span>
                            </th>
                            <th class="px-8 py-2 ">
                                <span class="text-white flex">Action</span>
                            </th>
                        </tr>
                    </thead>
                </table>
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
                ajax: {
                    url: "{{route('admin.peserta.index')}}"
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
                {data:'payment_verif_status', name:'payment_verif_status'},
                {data:'action', name:'action', searchable:false, orderable:false}
                ]
            })
        })
    </script>


@endpush

@endsection

