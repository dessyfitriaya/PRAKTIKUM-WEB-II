<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
        $model->insert([
            "username" => "user1",
            "email" => "user1@example.com",
            "password" => password_hash("user1", PASSWORD_DEFAULT)
        ]);
    }
}
