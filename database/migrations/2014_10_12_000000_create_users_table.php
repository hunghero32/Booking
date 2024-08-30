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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Khóa chính 'id'
            $table->string('name')->unique(); // Tên người dùng duy nhất
            $table->string('fullname')->nullable(); // Tên đầy đủ 
            $table->string('email')->unique(); // Email duy nhất
            $table->string('phone')->unique(); // Số điện thoại duy nhất
            $table->string('password'); // Mật khẩu đã mã hóa
            $table->string('avatar')->nullable(); // Ảnh đại diện (có thể để trống)
            $table->enum('role', ['customer', 'service_provider', 'admin'])->default('customer'); // Vai trò với giá trị mặc định là 'customer'
            $table->timestamps(); // Ngày tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
