<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemasok extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kodep' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                // 'unsigned' => true,
            ],
            'namap' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'alamatp' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],

        ]);
        $this->forge->addKey('kodep', true);
        $this->forge->createTable('pemasok');
    }

    public function down()
    {
        $this->forge->dropTable('pemasok');
    }
}
