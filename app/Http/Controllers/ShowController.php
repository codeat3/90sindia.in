<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function index()
    {
        return view('shows.index');
    }


    public function show(Show $show)
    {
        return view('shows.show');
    }
}
