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
            'name' => 'HTML',
            'num_of_posts' => 5
        ]);
        
        App\Category::create([
            'name' => 'CSS',
            'num_of_posts' => 5
        ]);
        
        App\Category::create([
            'name' => 'Laravel',
            'num_of_posts' => 5
        ]);
        
    }
}
