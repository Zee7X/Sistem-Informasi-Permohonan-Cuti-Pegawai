<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Widen text columns so MySQL strict mode doesn't reject longer
     * values (e.g. "alasan cuti lainnya", import dari Excel).
     *
     * @return void
     */
    public function up()
    {
        if (DB::getDriverName() !== 'mysql') {
            return;
        }

        DB::statement("
            ALTER TABLE permohonan_cuti
                MODIFY alasan_cuti VARCHAR(255) NOT NULL,
                MODIFY alamat_cuti VARCHAR(255) NOT NULL,
                MODIFY alasan_ditolak VARCHAR(255) NULL
        ");

        DB::statement("
            ALTER TABLE users
                MODIFY name VARCHAR(100) NOT NULL,
                MODIFY jabatan VARCHAR(100) NULL,
                MODIFY email VARCHAR(100) NULL
        ");

        DB::statement("
            ALTER TABLE units
                MODIFY name_unit VARCHAR(100) NOT NULL
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (DB::getDriverName() !== 'mysql') {
            return;
        }

        DB::statement("
            ALTER TABLE permohonan_cuti
                MODIFY alasan_cuti VARCHAR(50) NOT NULL,
                MODIFY alamat_cuti VARCHAR(70) NOT NULL,
                MODIFY alasan_ditolak VARCHAR(50) NULL
        ");

        DB::statement("
            ALTER TABLE users
                MODIFY name VARCHAR(50) NOT NULL,
                MODIFY jabatan VARCHAR(60) NULL,
                MODIFY email VARCHAR(60) NULL
        ");

        DB::statement("
            ALTER TABLE units
                MODIFY name_unit VARCHAR(50) NOT NULL
        ");
    }
};
