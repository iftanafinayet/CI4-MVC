<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'nip' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
                'unique' => true,
            ],  
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'alamat' => [
                'type'=> 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('pegawai');
    
    }
    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
