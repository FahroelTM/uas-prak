<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['id_dosen'] = '1233';
        $inputan['nip'] = '0029';
        $inputan['nama_dosen'] = 'Paijo';
        $inputan['foto_dosen'] = '';
        User::create($inputan);
    }
}
