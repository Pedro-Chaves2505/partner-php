<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnTrajectoryToWalks extends Migration
{
    public function up()
    {
        $this->forge->addColumn('walks', [
            'person_name' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('walks', 'person_name');
    }
}
