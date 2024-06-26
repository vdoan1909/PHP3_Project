<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PH33201Controller extends Controller
{
    public function index()
    {
        // $info = [
        //     [
        //         "id" => "PH33201",
        //         "name" => "Nguyen Van Doan",
        //         "age" => 19,
        //         "class" => "WD18321",
        //     ]
        // ];

        $info = [
            "id" => "PH33201",
            "name" => "Nguyen Van Doan",
            "age" => 19,
            "class" => "WD18321",
        ];

        return view("ph33201", compact("info"));
    }
}
