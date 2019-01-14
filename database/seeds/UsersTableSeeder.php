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
       $user = App\User::create([
            'name' => 'Pavao Pirsljin',
            'email' => 'pavaopirsljin@gmail.com',
            'password' => bcrypt('nts7kmq2'),
            'admin' => 1
        ]);
        
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/15473855531360.JPG',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quo voluptates quae suscipit, vitae eveniet, quibusdam repellendus reiciendis ab, recusandae, earum ullam quisquam optio pariatur eligendi repudiandae vero ut quod.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
        
    }
}
