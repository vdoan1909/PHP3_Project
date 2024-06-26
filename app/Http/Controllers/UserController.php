<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::latest("id")->get();
        return view('welcome', compact("data"));
        // return view('welcome')->with(
        //     [
        //         "data" => $data
        //     ]
        // );
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $model = User::where("id", $id)->first();
        return view('show', compact("model"));
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        //
    }

    // public function updateTest(Request $request){
    //     echo $request->id;
    // }
}
