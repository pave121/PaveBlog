<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\User;
use App\Profile;

class FrontEndController extends Controller
{
    public function index(){
        
        $posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = Category::orderBy('num_of_posts','desc')->take(3)->get();
        
        return view('index', [
            'categories' => $categories,
            'posts' => $posts,
        ]);
           
    }
    
    public function singlePost($slug){
        
        $post = Post::where('slug', $slug)->first();
        $author = $post->author;
        $profile = $author->profile;
        $categories = Category::take(5)->get();
        
        return view('single', [
            'categories' => $categories,
            'author' => $author,
            'profile' => $profile,
            'post' => $post
        ]);
                             
                             
    }
    
    public function category($category){
        
        $cat_id = Category::where('name', $category)->first();
        $posts = $cat_id->posts;

        
        return view('category')->with('posts', $posts)
            ->with('title', Setting::first()->site_name)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get())
            ->with('category', $cat_id);
    }
}
