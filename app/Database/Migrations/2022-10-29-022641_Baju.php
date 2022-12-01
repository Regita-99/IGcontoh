<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Baju extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kodeb' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'merkb' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'sizeb' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jumlahb' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'hargab' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'kodep' => [
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
        $this->forge->addKey('id', true);
        $this->forge->createTable('bajus');
    }

    public function down()
    {
        $this->forge->dropTable('bajus');
    }
}
