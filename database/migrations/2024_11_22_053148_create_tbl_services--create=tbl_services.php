<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_services', function (Blueprint $table) {
            $table->id();  // Mã định danh duy nhất
            $table->string('name');  // Tên dịch vụ
            $table->string('image')->nullable();  // Hình ảnh dịch vụ
            $table->text('description')->nullable();  // Mô tả dịch vụ
            $table->timestamps();  // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};