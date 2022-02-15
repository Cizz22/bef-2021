<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'whatsapp', 'instagram', 'school_name', 'address', 'kelas', 'photo_path',
        'peminatan', 'payment_proof_path', 'payment_verif_status', 'info_source', 'ptn1_id', 'prodi_1', 'ptn2_id', 'prodi_2','jenjang','kode'
    ];
    public function pilihanPertama()
    {
        return $this->belongsTo(Universitas::class, 'ptn1_id');
    }

    public function pilihanKedua()
    {
        return $this->belongsTo(Universitas::class, 'ptn2_id');
    }

    public function getJenjangAttribute(){
        if ($this->attributes['jenjang'] == 'SMA') {
            return 'Tryout & Expo Campus(Tiket 1)';
        }
        elseif ($this->attributes['jenjang'] == 'SMA2') {
            return 'Expo Campus(Tiket 2)';
        }
        elseif ($this->attributes['jenjang'] == 'Mahasiswa') {
            return 'Expo Campus';
        }
    }
}
