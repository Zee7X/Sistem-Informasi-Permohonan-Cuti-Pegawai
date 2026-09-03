<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            'Direksi',
            'P4MP',
            'PPM',
            'Teknik Informatika',
            'Teknik Mesin',
            'Teknik Elektronika',
            'Teknik Pencemaran Pengendalian Lingkungan',
            'Pengembangan Produk Agroindustri',
            'Akuntansi Lembaga Keuangan Syariah',
            'Umum',
            'Akademik',
            'Keuangan',
            'Teknologi Informasi Komputer',
            'Pemeliharaan',
            'Bahasa',
            'Perpustakaan',
        ];

        foreach ($units as $unit) {
            Unit::firstOrCreate(['name_unit' => $unit]);
        }
    }
}
