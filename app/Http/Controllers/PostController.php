<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
class PostController extends Controller
{
    public function create()
    {
    	return view('backend.post.index');
    }

    public function store(PostRequest $request)
    {
         

    	$allPost                = new Post();
        $allPost->name          = $request->name;
        $allPost->description   = $request->description;
    	$allPost->save();
        session()->flash('message','Created Successfully!');
    	return redirect()->back();
    }

}
