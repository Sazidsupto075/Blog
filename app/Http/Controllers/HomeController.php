<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class HomeController extends Controller
{
    public function index(Request $request){

        // $posts = Post::all();
        //
        // echo $posts;
         return view('home.index');
    }


}
