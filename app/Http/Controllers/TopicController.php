<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable')->latest();
    }
    }
