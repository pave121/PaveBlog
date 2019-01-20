<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tag::create([
            'tag' => 'PHP'
        ]);
        
        App\Tag::create([
            'tag' => 'Learning'
        ]);
        
        App\Tag::create([
            'tag' => 'Tutorial'
        ]);
        
        App\Tag::create([
            'tag' => 'Laravel'
        ]);
        
        App\Tag::create([
            'tag' => 'Intro'
        ]);
    }
}
