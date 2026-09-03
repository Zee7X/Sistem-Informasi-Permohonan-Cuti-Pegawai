<?php

namespace Database\Seeders;

use App\Models\HakCuti;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nip' => '200302095',
                'name' => 'Dhiya Udin Adha Suhadi',
                'email' => 'udin@gmail.com',
                'password' => Hash::make('udin'),
                'jenis_kelamin' => 'Laki-Laki',
                'role_id' => 1,
                'jabatan' => 'Dosen',
                'unit_id' => 1,
                'hak_cuti' => 12,
            ],
            [
                'nip' => '200102026',
                'name' => 'Muhamad Aldi',
                'email' => 'aldot@gmail.com',
                'password' => Hash::make('test'),
                'jenis_kelamin' => 'Laki-Laki',
                'role_id' => 2,
                'jabatan' => 'Kepala Bagian',
                'unit_id' => 2,
                'hak_cuti' => 12,
            ],
            [
                'nip' => '200102015',
                'name' => 'Imas Nurdianto',
                'email' => 'imas@gmail.com',
                'password' => Hash::make('imas'),
                'jenis_kelamin' => 'Laki-Laki',
                'role_id' => 3,
                'jabatan' => 'Wakil Direktur II',
                'unit_id' => 3,
                'hak_cuti' => 12,
            ],
            [
                'nip' => '200302094',
                'name' => 'Rizick Fimelyan Sabillah',
                'email' => 'rizickknotfest@gmail.com',
                'password' => Hash::make('test'),
                'jenis_kelamin' => 'Laki-Laki',
                'role_id' => 4,
                'jabatan' => 'Bagian Kepegawaian',
                'unit_id' => 4,
                'hak_cuti' => 12,
            ],
            [
                'nip' => '200102027',
                'name' => 'Hafidz',
                'email' => 'hafidz@gmail.com',
                'password' => Hash::make('test'),
                'jenis_kelamin' => 'Laki-Laki',
                'role_id' => 1,
                'jabatan' => 'Bagian Kepegawaian',
                'unit_id' => 2,
                'hak_cuti' => 4,
            ],
            [
                'nip' => '000000001',
                'name' => 'Direktur',
                'email' => 'direktur@gmail.com',
                'password' => Hash::make('test'),
                'jenis_kelamin' => 'Laki-Laki',
                'role_id' => 5,
                'jabatan' => 'Direktur',
                'unit_id' => 1,
                'hak_cuti' => 12,
            ],
        ];

        foreach ($users as $data) {
            $user = User::firstOrCreate(
                ['nip' => $data['nip']],
                collect($data)->except('hak_cuti')->all()
            );

            HakCuti::updateOrCreate(
                ['user_id' => $user->id],
                ['hak_cuti' => $data['hak_cuti']]
            );
        }
    }
}
