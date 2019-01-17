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
            'address' => 'Croatia, Dubrovnik',
            'contact_number' => '001 9921 212',
            'contact_email' => 'info@laravel_blog.com',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.'
        ]);
    }
}
