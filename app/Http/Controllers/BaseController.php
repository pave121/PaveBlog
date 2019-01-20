<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Setting;

class BaseController extends Controller
{
    public function __construct(){
        
        View::share('settings', Setting::first());
        
    }
    
}
