<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Pavao Pirsljin',
            'email' => 'pavaopirsljin@gmail.com',
            'password' => bcrypt('nts7kmq2')
        ]);
    }
}
