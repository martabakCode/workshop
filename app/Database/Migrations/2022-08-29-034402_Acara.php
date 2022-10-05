<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Acara extends Migration
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
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'created_at' => [
                'type' => 'timestamp'
            ],
            'updated_at' => [
                'type' => 'timestamp',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('masterevents');
    }

    public function down()
    {
        $this->forge->dropTable('masterevents');
    }
}
