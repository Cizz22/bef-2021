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
            ->addColumn('action', function($data){
                $button =  ' <div class="flex space-x-1 justify-around"> <button id="detail-button" @click="showModal1 = true" data-id='.$data->id.' class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-search-plus"></i></button></div>';
                return $button;
            })
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
                $button = '<div class="flex space-x-1 justify-evenly"> <button id="detail-button" data-id='.$data->id.' @click="showModal1 = true" class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Lihat Detail"><i class="fas fa-search-plus"></i></button>';
                $button .= '<button id="check-button" data-id='.$data->id.' class="p-1 text-green-600 hover:bg-green-600 hover:text-white rounded" title="Terima Pemabayarn"><i class="fas fa-check"></i></button>';
                $button .= '<button data-id='.$data->id.' id="times-button" class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded" title="Tolak Pembayaran"><i class="fas fa-times"></i></button></div>';
                return $button;
            }
            )
            ->addColumn('payment_proof_path', function($data){
                $button = '<div class="flex space-x-1 justify-around"> <a href="{{asset(`storage/payment_proof/'.$data->payment_proof_path.'`)}}" target=_blank> <button class="p-1 text-blue-600 hover:bg-blue-600 hover:text-white rounded" title="Download Bukti Bayar"><i class="fas fa-download"></i></button></div>';
                return $button;
            }
            )
            ->rawColumns(['action','payment_proof_path'])
            ->make(true);
        }
        return view('admin.dashboard.peserta.konfirmasi-pembayaran');
    }

    function detailPeserta($id){
        $peserta = Peserta::find($id);
	    return response()->json([
	      'data' => $peserta
	    ]);
    }

    function terimaPembayaran($id){
        $peserta = Peserta::find($id);
        $peserta->update([
            'payment_verif_status' => 'Terverifikasi'
        ]);
        return redirect()->route('admin.konfirmasibayar.index')->with(['success' => 'Pembayaran diterima']);
    }

    function tolakPembayaran($id){
        $peserta = Peserta::find($id);
        $peserta->update([
            'payment_verif_status' => 'Ditolak'
        ]);
        return redirect()->route('admin.konfirmasibayar.index')->with(['success' => 'Pembayaran ditolak']);
    }
}
