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
        Schema::create('booking_statuses', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');  // FK liên kết với bảng Bookings
            $table->enum('previous_status', ['Pending', 'Confirmed', 'Canceled']);  // Trạng thái trước đó của booking
            $table->enum('new_status', ['Pending', 'Confirmed', 'Canceled']);  // Trạng thái mới của booking
            $table->timestamp('change_date')->useCurrent();  // Ngày trạng thái được cập nhật
            $table->foreignId('changed_by')->constrained('users')->onDelete('cascade');  // FK liên kết với bảng Users (người thực hiện thay đổi)
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_statuses');
    }
};
