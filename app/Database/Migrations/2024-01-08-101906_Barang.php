<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang' => [
                'type'           => 'BIGINT',
                'auto_increment' => true,
            ],
            'id_barang_detail' => [
                'type'       => 'BIGINT',
            ],
            'harga_sewa' => [
                'type'       => 'INT',
            ],
            'waktu' => [
                'type'       => 'VARCHAR',
                'constraint' => '20'
            ],
            'stok' => [
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
        $this->forge->addKey('id_barang', true);
        $this->forge->addForeignKey('id_barang_detail', 'detail_barang', 'id_barang_detail', '', '', 'FK_detail_barang');
        $this->forge->createTable('barang');
    }

    public function down()
    {
        $this->forge->dropForeignKey('detail_barang', 'FK_detail_barang');
        $this->forge->dropTable('barang');
    }
}
