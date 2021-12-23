<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total = Peserta::latest()->count();
        $terverifikasi = Peserta::where('payment_verif_status', '=', 'Terverifikasi')->get()->count();
        $blm_terverif = Peserta::where('payment_verif_status', '=', 'Belum terverifikasi')->get()->count();

        return view("admin.dashboard.index" , compact(['total','terverifikasi','blm_terverif']));
    }
}
