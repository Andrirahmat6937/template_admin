<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_barang_detail' => [
                'type'           => 'BIGINT',
                'auto_increment' => true,
            ],
            'id_kategori' => [
                'type'       => 'INT',
            ],
            'merk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'tipe' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'nopol' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'nosurat' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
            ],
            'serial_no' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'keterangan' => [
                'type'       => 'TEXT',
                'null'       => true
            ],

        ]);
        $this->forge->addKey('id_barang_detail', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', '', '', 'FK_kategori');
        $this->forge->createTable('detail_barang');
    }

    public function down()
    {
        $this->forge->dropForeignKey('kategori', 'FK_kategori');
        $this->forge->dropTable('detail_barang');
    }
}
