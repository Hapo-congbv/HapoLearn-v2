<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hapo Tester',
            'email' => 'test@haposoft.com',
            'password' => bcrypt('12345678'),
            'birth_day' => '2020/08/19',
            'address' => 'hnoi',
            'phone' => '0987654321'
        ]);
    }
}
