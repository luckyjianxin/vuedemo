<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    //
    public function index()
    {
    	 $post = Post::find(1);
    	// $title = $post->user->name;
    	// dd($title);
    	$created_date = $post->created_at;

    	$now = $created_date->diffForHumans(Carbon::now());
    	dd($now);
    }

	public function getall()
    {
    	$user = User::find(15);

    	$posts = $user->posts;

    	foreach ($posts as $key => $value) {
    		# code...
    		echo $value->title . '</br>';
    	}
    	
    }    
}
