<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PesertaMahasiswaExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Peserta::query()->where([
            ['jenjang', '=', 'Mahasiwa'],
            ['payment_verif_status', '=','Terverifikasi']
        ]);
    }

    public function headings(): array
    {
        return [
            'no', 'name', 'email', 'whatsapp', 'instagram', 'school_name'
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
        ];
    }
}
