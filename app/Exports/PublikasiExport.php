<?php

namespace App\Exports;

use App\Models\Publikasi;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class PublikasiExport implements FromCollection, WithHeadings, WithStrictNullComparison
{
    public function collection()
    {
        $type = Publikasi::select('pub_id', 'title', 'no_rak', 'domain', 'status_website', 'rl_date', 'abstract')->get();
        return $type;
    }
    public function headings(): array
    {
        return [
            'no', 'Judul', 'No Rak', 'Asal', 'Ketersediaan di Website', 'Tanggal Rilis', 'Abstrak'
        ];
    }
}
