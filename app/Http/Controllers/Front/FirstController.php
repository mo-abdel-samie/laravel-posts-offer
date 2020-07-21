<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

use App\Post;


class FirstController extends Controller
{
    public function showString(){

        // $date=[];
        // $date['name'] = "mohamed";
        // $date['age']  = 20;
        // $date['id']   = 1;
        return view('landingpage');
    }

    public function genralpage(){

        $posts = post::get();
        return view('genralpage')-> with('posts',$posts);

    }
}
