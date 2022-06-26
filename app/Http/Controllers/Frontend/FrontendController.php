<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Lesson;

class FrontendController extends Controller
{
  public function index()
  {
  	 // check if data exists in cache 
  	$data['posts'] = cache()->remember('posts',now()->addSeconds(),function(){
  		return Post::latest('created_at')->take(100)->get();
  	});
  	 // show data from cache
  	 // if doesn't exists query from database

  	  return view('frontend.index',$data);

  }

  public function getlesson()
  {
    
     $data['lessons'] = cache()->remember('lessons',now()->addSeconds(30),function(){
         return Lesson::latest('created_at')->take(500)->get();
     });
          return view('frontend.lessonAll',$data);

  }

}
