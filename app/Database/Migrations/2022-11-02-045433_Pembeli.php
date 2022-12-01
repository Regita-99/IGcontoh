<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pembeli extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pembeli' => [
                'type'           => 'INT',
                'constraint'     => 5,
                // 'unsigned'       => true,
                'auto_increment' => true,
            ],
            'namaPem' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'jumlahPem' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],
            'update_at' => [
                'type' => 'DATETIME',
                'null' => 'true',
            ],

        ]);
        $this->forge->addKey('id_pembeli', true);
        $this->forge->createTable('pembeli');
    }

    public function down()
    {
        $this->forge->dropTable('pembeli');
    }
}
