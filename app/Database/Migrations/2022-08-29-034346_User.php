<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
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
        $this->forge->createTable('users');  
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
