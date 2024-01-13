<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Sewa1 extends Migration
{
    public function up()
    {
        $fields = [
            'km_awal' => [
                'name'          => 'km_awal',
                'type'          => 'INT',
                'null'          => true,
            ]
        ];

        $fields1 = [
            'id_user' => [
                'type'           => 'INT',
            ],
        ];

        $this->forge->modifyColumn('sewa', $fields);
        $this->forge->addColumn('sewa', $fields1);

        $this->db->query('ALTER TABLE sewa ADD CONSTRAINT FK_user_id FOREIGN KEY (id_user) REFERENCES user(id_user) ON DELETE RESTRICT ON UPDATE RESTRICT');
    }

    public function down()
    {
        $this->forge->dropColumn('sewa', 'id_user');
        $this->db->query('ALTER TABLE sewa DROP FOREIGN KEY FK_user_id');
    }
}
