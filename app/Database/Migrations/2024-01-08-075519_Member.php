<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Member extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_member' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nama_member' => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_telp' => [
                'type'       => 'INT',
                'constraint' => '30',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id_member', true);
        $this->forge->createTable('member');
    }

    public function down()
    {
        $this->forge->dropTable('member');
    }
}
