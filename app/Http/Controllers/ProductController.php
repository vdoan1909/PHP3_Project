<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    const PATH_VIEW = "product.";
    public function index(Request $request)
    {
        if ($request->search) {
            $products = DB::table("product")->join("category", "category.id", "=", "product.category_id")
                ->select("product.id", "product.name", "product.price", "product.view", "category.name as ctg_name")
                ->where("product.name", "like", "%" . $request->search . "%")
                ->get();
        } else {
            $products = DB::table("product")->join("category", "category.id", "=", "product.category_id")
                ->select("product.id", "product.name", "product.price", "product.view", "category.name as ctg_name")
                ->orderByDesc("product.view")
                ->get();
        }

        // dd($products);
        return view(self::PATH_VIEW . __FUNCTION__, compact("products"));
    }

    public function create()
    {
        $categories = DB::table("category")->select("id", "name")->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact("categories"));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(
            [
                "name" => "required",
                "category_id" => "required",
                "price" => "required",
                "view" => "required",
            ]
        );

        DB::table("product")->insert(
            [
                "name" => $data["name"],
                "category_id" => $data["category_id"],
                "price" => $data["price"],
                "view" => $data["view"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        );

        return redirect()->route("products.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = DB::table("product")->where("id", $id)->first();
        $categories = DB::table("category")->select("id", "name")->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact("model", "categories"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $request->validate(
            [
                "name" => "required",
                "category_id" => "required",
                "price" => "required",
                "view" => "required",
            ]
        );

        DB::table("product")->where("id", $id)->update(
            [
                "name" => $data["name"],
                "category_id" => $data["category_id"],
                "price" => $data["price"],
                "view" => $data["view"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        );

        return redirect()->route("products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = DB::table("product")->where("id", $id)->delete();
        return back();
    }
}
