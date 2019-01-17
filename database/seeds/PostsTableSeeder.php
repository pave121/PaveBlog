<?php

use Illuminate\Database\Seeder;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $category = DB::table('categories')->get();
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'HTML Post 1',
            'slug' => 'html-post-1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[0]->id,
            'featured' => 'uploads/posts/html1.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'HTML Post 2',
            'slug' => 'html-post-2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[0]->id,
            'featured' => 'uploads/posts/html2.png'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'HTML Post 3',
            'slug' => 'html-post-3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[0]->id,
            'featured' => 'uploads/posts/html3.png'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'HTML Post 4',
            'slug' => 'html-post-4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[0]->id,
            'featured' => 'uploads/posts/html4.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'HTML Post 5',
            'slug' => 'html-post-5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[0]->id,
            'featured' => 'uploads/posts/html5.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'CSS Post 1',
            'slug' => 'css-post-1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[1]->id,
            'featured' => 'uploads/posts/css1.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'CSS Post 2',
            'slug' => 'css-post-2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[1]->id,
            'featured' => 'uploads/posts/css2.png'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'CSS Post 3',
            'slug' => 'css-post-3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[1]->id,
            'featured' => 'uploads/posts/css3.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'CSS Post 4',
            'slug' => 'css-post-4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[1]->id,
            'featured' => 'uploads/posts/css4.png'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'CSS Post 5',
            'slug' => 'css-post-5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[1]->id,
            'featured' => 'uploads/posts/css5.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'Laravel Post 1',
            'slug' => 'laravel-post-1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[2]->id,
            'featured' => 'uploads/posts/laravel1.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'Laravel Post 2',
            'slug' => 'laravel-post-2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[2]->id,
            'featured' => 'uploads/posts/laravel2.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'Laravel Post 3',
            'slug' => 'laravel-post-3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[2]->id,
            'featured' => 'uploads/posts/laravel3.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'Laravel Post 4',
            'slug' => 'laravel-post-4',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[2]->id,
            'featured' => 'uploads/posts/laravel4.jpg'
        ]);
        
        App\Post::create([
            'user_id' => $user->id,
            'title' => 'Laravel Post 5',
            'slug' => 'laravel-post-5',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel orci aliquam, aliquam risus eu, facilisis nibh. Cras elementum, urna eget tempus finibus, odio elit convallis eros, nec gravida quam velit mattis nulla. Mauris lobortis ornare eleifend. Nullam nec pharetra augue, id consectetur nisi. Praesent vehicula nulla odio, eu aliquet augue sollicitudin a. Aliquam suscipit condimentum eleifend. Nunc euismod leo eget eros cursus scelerisque. Suspendisse vitae lobortis neque. Ut id euismod sapien, a porttitor tellus. Donec eget odio tortor.',
            'category_id' => $category[2]->id,
            'featured' => 'uploads/posts/laravel5.jpg'
        ]);
    }
}
