<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'email', 'whatapp', ' instagram', 'school_name', 'address', 'photo_path',
                             'peminatan', 'payment_proof_path', 'payment_verif_status', 'ptn1_id', 'prodi_1', 'ptn2', 'prodi_2'];

    public function pilihanPertama(){
        return $this->belongsTo(Universitas::class, 'ptn1_id');
    }

    public function pilihanKedua(){
        return $this->belongsTo(Universitas::class, 'ptn2_id');
    }

}
