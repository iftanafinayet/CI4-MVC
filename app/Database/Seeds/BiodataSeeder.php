<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BiodataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'                  => 'Nayet Iftanafi',
                'tempat_lahir'          => 'Tegal',
                'tanggal_lahir'         => '25-10-2006',
                'alamat'                => 'Jl. Mawar No 59 Tegal',
                'nomor_telepon'         => '081910788601',
                'jenis_kelamin'         => 'Laki-laki',
                'pendidikan_terakhir'   => 'SMA',
            ],
        ];

        // Using Query Builder
        $this->db->table('biodata')->insertBatch($data);
    }
}
