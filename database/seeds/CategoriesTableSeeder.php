<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' => 'HTML'
        ]);
        
        App\Category::create([
            'name' => 'CSS'
        ]);
        
        App\Category::create([
            'name' => 'Laravel'
        ]);
        
    }
}
