<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailBarang1 extends Migration
{
    public function up()
    {
        $fields = [
            'gambar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
                'null'           => true
            ],
        ];
        $this->forge->addColumn('detail_barang', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('detail_barang', 'gambar');
    }
}
