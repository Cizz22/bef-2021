<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaListController extends Controller
{
    function index(){
        $peserta = Peserta::latest()->when(request()->q, function($peserta) {
            $peserta = $peserta->where('name', 'like' , '%' . request()->q. '%');
        })->paginate(10);

        return view('admin.dashboard.peserta.pesertalist', compact(['peserta']));
    }
}
