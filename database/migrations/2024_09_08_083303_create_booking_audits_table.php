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
        Schema::create('booking_audits', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');  // FK liên kết với bảng Bookings
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // FK liên kết với bảng Users (người thực hiện thay đổi)
            $table->string('field_changed');  // Tên trường dữ liệu thay đổi (VD: start_date, total_price)
            $table->text('old_value')->nullable();  // Giá trị cũ trước khi thay đổi
            $table->text('new_value')->nullable();  // Giá trị mới sau khi thay đổi
            $table->timestamp('change_date')->useCurrent();  // Ngày thay đổi
            $table->text('notes')->nullable();  // Ghi chú hoặc lý do thay đổi
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_audits');
    }
};
