<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Toko extends Migration
{
    public function up()
    {
        $fields = [
            'cabang' => [
                'name'          => 'cabang_toko',
                'type'          => 'VARCHAR',
                'constraint'    => '100',
                'null'          => true,
            ],
        ];
        $this->forge->modifyColumn('toko', $fields);
    }

    public function down()
    {
        //
    }
}
