<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Toko extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_toko' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nama_toko' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'no_telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'cabang' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_toko', true);
        $this->forge->createTable('toko');
    }

    public function down()
    {
        $this->forge->dropTable('toko');
    }
}
