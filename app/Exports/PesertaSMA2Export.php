<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PesertaSMA2Export implements FromQuery, WithHeadings, WithMapping
{

    use Exportable;

    public function query()
    {
        return Peserta::query()->where([
            ['jenjang', 'SMA2'],
            ['payment_verif_status', '=','Terverifikasi']
        ]);
    }

    public function headings(): array
    {
        return [
            'no', 'name', 'email', 'whatsapp', 'school_name','ptn1_id', 'prodi_1', 'ptn2_id', 'prodi_2'
        ];
    }

    public function map($peserta): array
    {
        return [
            $peserta->id,
            $peserta->name,
            $peserta->email,
            $peserta->whatsapp,
            $peserta->school_name,
            $peserta->pilihanPertama->nama_universitas,
            $peserta->prodi_1,
            $peserta->pilihanKedua->nama_universitas,
            $peserta->prodi_2,
        ];
    }
}
