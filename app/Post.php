<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'category_id',
        'featured',
        'slug'
    ];
    
    public function getFeaturedAttribute($featured){
        
        return asset($featured);
    }
    
    protected $dates = ['deleted_at'];
        
    public function category(){
        
        return $this->belongsTo('App\Category', 'category_id');
    }
    
    public function tags(){
        
        return $this->belongsToMany('App\Tag');
    }
    
    public function author(){
        
        return $this->belongsTo('App\User', 'user_id');
    }
}
