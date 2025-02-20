<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Post;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function __invoke(Request $request)
    {
       return view('home', [
         //featurePosts es una variable que se le pasara a la vista en el home
         //LLama a los 3 primeros registros de la db usando eloquent
        'featuredPosts' => Post::published()->featured()->latest('published_at')->take(3)->get(),
        'latestPosts' => Post::take (9)->get()
       ]);
    }
}
