<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Merk extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'merkb' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            

        ]);
        $this->forge->addKey('merkb', true);
        $this->forge->createTable('merk');
    }

    public function down()
    {
        $this->forge->dropTable('merk');
    }
}
