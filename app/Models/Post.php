<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\PostCreated;
use App\Events\PostUpdated;
use App\Events\PostDeleted;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];


    protected $dispatchesEvents = [
        'created' => PostCreated::class,
        'updated' => PostUpdated::class,
        'deleted' => PostDeleted::class,
    ];

}
