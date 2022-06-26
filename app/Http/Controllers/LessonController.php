<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Http\Requests\LessonRequest;

class LessonController extends Controller
{
    public function create()
    {
    	return view('backend.lesson.index');
    }

    public function store(LessonRequest $request)
    {
    	  $lesson  				= new Lesson();
    	  $lesson->name  		= $request->name;
    	  $lesson->description  = $request->description;
    	  $lesson->save();
    	  session()->flash('message','Lesson Created Successfully');
    	  return redirect()->back();
     }

}
