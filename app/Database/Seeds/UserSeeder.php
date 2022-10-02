<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'      => 'Rajendra Nohan',
            'email'     => 'rajendranohan4@gmail.com',
            'phone'     => '085157573144',
            'password'  => password_hash('12345678', PASSWORD_DEFAULT),
        ];
        $this->db->table('users')->insert($data);
    }
}
