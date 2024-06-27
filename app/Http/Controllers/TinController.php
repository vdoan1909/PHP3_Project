<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function lay1tin($id)
    {
        return view("chitiet", compact("id"));
    }
}
