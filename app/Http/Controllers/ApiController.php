<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ApiController extends Controller
{
    //get posts
    public function getPosts($number =5)
    {
    	$posts = Post::orderBy('created_at', 'DESC')->limit($number)->get();

    	return response()->json($posts);
    }
}
