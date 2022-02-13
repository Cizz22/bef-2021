<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PesertaSMAExport implements FromQuery, WithHeadings, WithMapping
{

    use Exportable;

    public function query()
    {
        return peserta::query()->where([
            ['jenjang', '=', 'SMA'],
            ['payment_verif_status', '=','Terverifikasi']
        ]);
    }

    public function headings(): array
    {
        return [
            'no', 'name', 'email', 'whatsapp', 'instagram', 'school_name', 'address', 'kelas',
            'peminatan','ptn1_id', 'prodi_1', 'ptn2_id', 'prodi_2','kode'
        ];
    }

    public function map($peserta): array
    {
        return [
            $peserta->id,
            $peserta->name,
            $peserta->email,
            $peserta->whatsapp,
            $peserta->instagram,
            $peserta->school_name,
            $peserta->address,
            $peserta->kelas,
            $peserta->peminatan,
            $peserta->pilihanPertama->nama_universitas,
            $peserta->prodi_1,
            $peserta->pilihanKedua->nama_universitas,
            $peserta->prodi_2,
            $peserta->kode
        ];
    }
}
