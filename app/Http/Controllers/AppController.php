<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class AppController extends Controller
{

    public function index()
    {
        return view("math");
    }

    public function math()
    {
    }
}
