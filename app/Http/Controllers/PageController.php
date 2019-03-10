<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PageController extends Controller
{
    public function index(){
    	$posts = Post::orderBy('id', 'desc')->get();

    	return view('index', compact('posts'));
    }
}
