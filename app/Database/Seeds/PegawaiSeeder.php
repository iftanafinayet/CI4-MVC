<?php 

namespace App\Database\Seeds;
use CodeIgniter\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'       => 'Siti Aminah',
                'nip'        => '1987654321',
                'departemen' => 'Keuangan',
                'alamat'     => 'Jl. Merdeka No. 10, Jakarta',
            ],
            [
                'nama'       => 'Andi Pratama',
                'nip'        => '1987654322',
                'departemen' => 'Sumber Daya Manusia',
                'alamat'     => 'Jl. Sudirman No. 20, Bandung',
            ],
            [
                'nama'       => 'Rina Kusuma',
                'nip'        => '1987654323',
                'departemen' => 'Pemasaran',
                'alamat'     => 'Jl. Thamrin No. 15, Surabaya',
            ],
        ]; 
        // Using Query Builder
        $this->db->table('pegawai')->insertBatch($data);
    }
}