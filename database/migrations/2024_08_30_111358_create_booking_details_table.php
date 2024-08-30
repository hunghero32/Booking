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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');  // FK đến bảng Bookings
            $table->string('item_type');  // Loại mục đặt chỗ (phòng khách sạn, vé sự kiện, tour)
            $table->string('item_name');  // Tên mục đặt chỗ
            $table->integer('quantity');  // Số lượng
            $table->decimal('price', 13, 2);  // Giá cho mỗi mục, lưu dưới dạng decimal
            $table->decimal('total', 13, 2);  // Tổng giá trị cho mục đặt chỗ
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
