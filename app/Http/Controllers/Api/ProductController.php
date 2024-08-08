<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProduct = Product::select("product_id", "name", "description", "price")->get();

        return response()->json(
            [
                "data" => $listProduct,
                "status_code" => "200",
                "message" => "success"
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required'
            ]
        );

        $data = [
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
        ];

        $new_product = Product::create($data);
        return response()->json(
            [
                'data' => $new_product,
                "status_code" => "201",
                'message' => "success"
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product_id)
    {
        $product = Product::select("product_id", "name", "description", "price")->find($product_id);

        return response()->json(
            [
                "data" => $product,
                "status_code" => "200",
                "message" => "success"
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate(
            [
                'product_id' => 'required',
                'name' => 'required',
                'description' => 'required',
                'price' => 'required'
            ]
        );

        $data = [
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
        ];

        $product = Product::find($request->product_id);

        $product->update($data);

        return response()->json(
            [
                "data" => $product,
                "status_code" => "201",
                "message" => "success"
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Product::find($request->product_id)->delete();

        return response()->json(
            [
                "status_code" => "201",
                "message" => "success"
            ],
            201
        );
    }
}
