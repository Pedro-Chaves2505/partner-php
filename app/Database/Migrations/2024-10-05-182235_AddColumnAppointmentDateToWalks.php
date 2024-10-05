<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnTrajectoryToWalks extends Migration
{
    public function up()
    {
        $this->forge->addColumn('walks', [
            'appointment_datetime' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('walks', 'appointment_datetime');
    }
}
