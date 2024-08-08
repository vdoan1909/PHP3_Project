<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments("order_detail_id");
            $table->unsignedInteger("order_id");
            $table->unsignedInteger("product_id");
            $table->integer("quantity")->default(1);
            $table->float("price", 10, 2);
            $table->timestamps();

            $table->foreign("order_id")->references("order_id")->on("orders")->onDelete("cascade");
            $table->foreign("product_id")->references("product_id")->on("products")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
