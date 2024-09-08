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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // FK đến bảng Users, nếu xóa user thì ví sẽ bị xóa
            $table->decimal('balance', 15, 2)->default(0);  // Số dư hiện tại trong ví, lưu dưới dạng decimal
            $table->string('currency')->default('VND');  // Loại tiền tệ (VD: VND, USD), mặc định là VND
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
