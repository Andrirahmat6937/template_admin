<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KembaliBarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kembali' => [
                'type'           => 'BIGINT',
                'auto_increment' => true,
            ],
            'id_sewa' => [
                'type'       => 'BIGINT',
            ],
            'tanggal_kembali' => [
                'type'       => 'DATETIME',
            ],
            'km_akhir' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true
            ],
            'denda' => [
                'type'       => 'INT',
                'null'       => true
            ],
            'total_bayar' => [
                'type'      => 'INT',

            ],
            'id_user' => [
                'type'      => 'INT',
            ],
            'updated_at' => [
                'type'      => 'DATETIME',
                'null'      => true
            ],

        ]);
        $this->forge->addKey('id_kembali', true);
        $this->forge->addForeignKey('id_sewa', 'sewa', 'id_sewa', '', '', 'FK_sewa');
        $this->forge->addForeignKey('id_user', 'user', 'id_user', '', '', 'FK_user');
        $this->forge->createTable('kembali_barang');
    }

    public function down()
    {
        $this->forge->dropForeignKey('sewa', 'FK_sewa');
        $this->forge->dropForeignKey('user', 'FK_user');
        $this->forge->dropTable('kembali_barang');
    }
}
