<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Walks extends Migration
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
            'starting_point' => [
                'type'          => 'VARCHAR',
                'constraint'    => 70,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('walks');
    }

    public function down()
    {
        $this->forge->dropTable('walks');
    }
}
