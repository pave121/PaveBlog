<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => 'Pave\'s Blog',
            'city' => 'Dubrovnik, Croatia',
            'address' => 'Rusici 13',
            'contact_number' => '001 9921 212',
            'contact_email' => 'info@laravel_blog.com',
            'about' => 'About this Blog'
        ]);
    }
}
