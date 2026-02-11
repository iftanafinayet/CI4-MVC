<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBiodata extends Migration
{
    public function up()
    {
            $this->forge->addField([
                'id'       => [
                    'type'           => 'INT',
                    'auto_increment'  => true,
                ],
                'nama'     => [
                    'type'       => 'VARCHAR',
                    'constraint' => '255',
                    'null'       => false,
                ],
                'tempat_lahir'      => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
                    'null'       => false,
                ],
                'tanggal_lahir' => [
                    'type' => 'DATE',
                    'null' => false,
                ],

                'alamat' => [
                    'type' => 'TEXT',
                    'null' => false,
                ],
                'nomor_telepon' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '15',
                    'null'       => false,

                ],

                'jenis_kelamin' => [
                    'type'       => 'ENUM',
                    'constraint' => ['Laki-laki', 'Perempuan'],
                    'null'       => false,
                ],

                'pendidikan_terakhir' => [
                    'type'       => 'VARCHAR',
                    'constraint' => '100',
                    'null'       => false,
                ],

            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('biodata');
        }

        public function down()
        {
            $this->forge->dropTable('biodata');
        }
    }