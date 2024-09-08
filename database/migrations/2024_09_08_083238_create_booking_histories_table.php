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
        Schema::create('booking_histories', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');  // FK liên kết với bảng Bookings
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // FK liên kết với bảng Users
            $table->enum('action', ['Created', 'Updated', 'Canceled', 'Confirmed']);  // Hành động
            $table->enum('status', ['Pending', 'Confirmed', 'Canceled'])->default('Pending');  // Trạng thái mới của booking
            $table->timestamp('change_date')->useCurrent();  // Ngày thay đổi
            $table->text('notes')->nullable();  // Ghi chú về thay đổi hoặc lý do thay đổi
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_histories');
    }
};
