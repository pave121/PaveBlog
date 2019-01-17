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
       $admin = App\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);
        
        $user = App\User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'admin' => 0
        ]);
        
        App\Profile::create([
            'user_id' => $admin->id,
            'avatar' => 'uploads/avatars/admin.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quo voluptates quae suscipit, vitae eveniet, quibusdam repellendus reiciendis ab, recusandae, earum ullam quisquam optio pariatur eligendi repudiandae vero ut quod.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
        
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/user.jpg',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quo voluptates quae suscipit, vitae eveniet, quibusdam repellendus reiciendis ab, recusandae, earum ullam quisquam optio pariatur eligendi repudiandae vero ut quod.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
        
    }
}
