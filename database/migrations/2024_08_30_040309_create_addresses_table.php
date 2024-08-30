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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id(); // Khóa chính 'id'
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Khóa ngoại liên kết với bảng 'users'
            $table->string('street_address'); // Địa chỉ nhà
            $table->string('ward'); // Xã/Phường
            $table->string('district'); // Quận/Huyện
            $table->string('province'); // Tỉnh/Thành phố
            $table->string('country')->default('Việt Nam'); // Quốc gia
            $table->string('linkmap')->nullable(); // Link Google Map 
            $table->timestamps(); // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
