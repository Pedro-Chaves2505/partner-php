<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnTrajectoryToWalks extends Migration
{
    public function up()
    {
        $this->forge->addColumn('walks', [
            'trajectory' => [
                'type' => 'VARCHAR',
                'constraint' => 400,
                'null' => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('walks', 'trajectory');
    }
}
