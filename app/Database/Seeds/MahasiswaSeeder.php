<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'    => 'Budi Santoso',
                'nim'     => '2021001',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama'    => 'Ani Wijaya',
                'nim'     => '2021002',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama'    => 'Citra Dewi',
                'nim'     => '2021003',
                'jurusan' => 'Teknik Informatika',
            ],
        ];

        // Using Query Builder
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
