<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // 1. Lấy danh sách toàn bộ user
    public function index()
    {
        // Lay danh sach toan bo user
        $data = DB::table("users")->latest('id')->get();
        // dd($data);
        return view('welcome', compact("data"));
    }

    // Lay 1
    public function show(string $id)
    {
        // 2. Lấy thông tin user có id = 4 
        // $model = Db::table("users")->where("id", '4')->first();
        // find chi lam duoc voi ID
        $model = DB::table("users")->find('4');
        // dd($model);

        // 3. Lấy thuộc tính 'name' của user có id = 16
        $model2 = DB::table("users")->where("id", "16")->value("name");
        // dd($model2);

        // 4. Lấy danh sách id của phòng ban 'Ban giám hiệu'
        $id_phong_ban = DB::table('phongban')->where('ten_donvi', "Ban giám hiệu")->value('id');
        $model3 = DB::table("users")->where("phongban_id", $id_phong_ban)->pluck("id");
        // dd($model3);

        // 5. Tìm user có độ tuổi lớn nhất trong công ty 
        $model4 = DB::table("users")->where('tuoi', DB::table("users")->max("tuoi"))->get();
        // dd($model4);

        // 6. Tìm user có độ tuổi nhỏ nhất trong công ty
        $model5 = DB::table("users")->where('tuoi', DB::table("users")->min("tuoi"))->get();
        // dd($model5);

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        $model6 = DB::table("users")->where("phongban_id", $id_phong_ban)->count("id");
        // dd($model6);

        // 8. Lấy danh sách tuổi các user
        $model7 = DB::table("users")->distinct()
            ->pluck("tuoi");
        // dd($model7);

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        $model8 = DB::table("users")->where("name", "like", "%Khải")->orWhere("name", "like", "%Thanh")->get();
        // dd($model8);

        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        $id_phong_ban2 = DB::table("phongban")->where("ten_donvi", "Ban đào tạo")->value("id");
        $model9 = DB::table("users")->where("phongban_id", $id_phong_ban2)
            ->select("id", "name", "email")
            ->get();
        // dd($model9);

        // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        $model10 = DB::table("users")->where("tuoi", ">=", "30")
            ->select("id", "name", "tuoi", "email")
            ->orderBy("tuoi", "asc")
            ->get();
        // dd($model10);

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        $model11 = DB::table("users")
            ->select("id", "name", "tuoi", "email")
            ->orderBy("tuoi", "desc")
            ->offset(5)
            ->limit(10)
            ->get();
        // dd($model11);

        // 13. Thêm một user mới vào công ty
        $data_user = [
            "name" => "Nguyen Van Doan",
            "email" => "toiladoan@gmail.com",
            "phongban_id" => "1",
            "songaynghi" => "1",
            "tuoi" => "19",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];
        // DB::table("users")->insert($data_user);

        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
        foreach ($model9 as $item) {
            DB::table("users")->where("id", $item->id)
                ->update(
                    [
                        "name" => $item->name . " PDT"
                    ]
                );
        }

        // 15. Xóa user nghỉ quá 15 ngày
        DB::table("users")->where("songaynghi", ">", "15")->delete();

        return view('show', compact("model", "model2", "model3", "model4", "model5", "model6", "model7", "model8", "model9", "model10", "model11"));
    }
}
