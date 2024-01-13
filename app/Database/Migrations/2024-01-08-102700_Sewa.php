<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sewa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sewa' => [
                'type'           => 'BIGINT',
                'auto_increment' => true,
            ],
            'id_barang' => [
                'type'           => 'BIGINT',
            ],
            'id_member' => [
                'type'       => 'INT',
            ],
            'km_awal' => [
                'type'       => 'INT',
            ],
            'jaminan' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'no_identitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '50'
            ],
            'lama_sewa' => [
                'type'       => 'INT',
            ],
            'total_biaya' => [
                'type'       => 'INT',
            ],
            'created_at' => [
                'type'      => 'DATETIME',
                'null'      => true
            ],
            'updated_at' => [
                'type'      => 'DATETIME',
                'null'      => true
            ],

        ]);
        $this->forge->addKey('id_sewa', true);
        $this->forge->addForeignKey('id_barang', 'barang', 'id_barang', '', '', 'FK_barang');
        $this->forge->addForeignKey('id_member', 'member', 'id_member', '', '', 'FK_member');
        $this->forge->createTable('sewa');
    }

    public function down()
    {
        $this->forge->dropForeignKey('barang', 'FK_barang');
        $this->forge->dropForeignKey('member', 'FK_member');
        $this->forge->dropTable('sewa');
    }
}
