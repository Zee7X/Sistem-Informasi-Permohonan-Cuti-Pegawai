<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name' => 'Pegawai']);
        Role::firstOrCreate(['name' => 'Kepala Unit']);
        Role::firstOrCreate(['name' => 'Wakil Direktur 2']);
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Direktur']);
    }
}
