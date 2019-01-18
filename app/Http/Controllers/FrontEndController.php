<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\User;

class FrontEndController extends Controller
{
    public function index(){
        
        return view('index')
            ->with('title', Setting::first()->site_name)
            ->with('categories', Category::take(3)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('php', Category::find(1))
            ->with('laravel', Category::find(2))
            ->with('settings', Setting::first());
    }
    
    public function singlePost($slug){
        
        $post = Post::where('slug', $slug)->first();
        $author = User::where('id', $post->user_id)->first();
        
        return view('single')->with('post', $post)
                             ->with('title', Setting::first()->site_name)
                             ->with('categories', Category::take(5)->get())
                             ->with('settings', Setting::first())
                             ->with('author', $author);
    }
    
    public function category($category){
        
        $cat_id = Category::where('name', $category)->first();
        $posts = Post::where('category_id', $cat_id->id)->get();

        
        return view('category')->with('posts', $posts)
            ->with('title', Setting::first()->site_name)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get())
            ->with('category', $cat_id);
    }
}
