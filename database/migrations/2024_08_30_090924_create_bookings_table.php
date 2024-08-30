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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // FK đến bảng Users
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');  // FK đến bảng Services
            $table->foreignId('address_id')->constrained('addresses')->onDelete('cascade');  // FK đến bảng Addresses
            $table->dateTime('start_date');  // Ngày giờ bắt đầu đặt chỗ
            $table->dateTime('end_date');  // Ngày giờ kết thúc đặt chỗ
            $table->enum('status', ['Pending', 'Confirmed', 'Canceled'])->default('Pending');  // Trạng thái đặt chỗ
            $table->decimal('total_price', 13, 2);  // Tổng giá trị đặt chỗ, lưu dưới dạng decimal với 10 chữ số, 2 chữ số thập phân
            $table->enum('payment_status', ['Pending', 'Completed'])->default('Pending');  // Trạng thái thanh toán
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
