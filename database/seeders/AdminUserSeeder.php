<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Mitesh Kadivar',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
