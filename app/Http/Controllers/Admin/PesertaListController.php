<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;
use DataTables;

class PesertaListController extends Controller
{
    function index(){

        if(request()->ajax()){
            $data = Peserta::all();
            return datatables()
            ->of($data)
            ->setRowClass('tabletr overflow-x-hidden')
            ->addColumn('action', ' <div class="flex space-x-1 justify-around"> <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-search-plus"></i></button></div>')
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.dashboard.peserta.pesertalist');
    }

    function konfirmasibayar(){
        if(request()->ajax()){
            $data = Peserta::where('payment_verif_status', '=','Belum Terverifikasi')->get();
            return datatables()
            ->of($data)
            ->setRowClass('tabletr overflow-x-hidden')
            ->addColumn('action', function($data){
                $button = '<div class="flex space-x-1 justify-evenly"> <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-search-plus"></i></button>';
                $button .= '<button class="p-1 text-green-600 hover:bg-green-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-check"></i></button>';
                $button .= '<button class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-times"></i></button></div>';
                return $button;
            }
            )
            ->addColumn('payment_proof_path', ' <div class="flex space-x-1 justify-around"> <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Download Bukti Bayar"><i class="fas fa-download"></i></button></div>')
            ->rawColumns(['action','payment_proof_path'])
            ->make(true);
        }
        return view('admin.dashboard.peserta.konfirmasi-pembayaran');
    }
}
