<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PublicController extends Controller
{

    public function index(Request $request){

        $post = Post::all();

        $user = User::where('user_id', 1)
            ->first();

          return view('welcome', ['post' => $post, 'user' => $user]);

         // echo $post->post_title;

    }

    public function signin(){


         return view('signin.index');
    }

    public function signup(){

        return view('signup.index');
    }
}
