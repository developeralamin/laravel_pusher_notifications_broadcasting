<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\LessonCreated;

class Lesson extends Model
{
	use HasFactory;
	protected $fillable = ['id','name','description'];
    
	 protected $dispatchesEvents = [
        'created' => LessonCreated::class,
    ];

}
