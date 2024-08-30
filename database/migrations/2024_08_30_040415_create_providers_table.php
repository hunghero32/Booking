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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  // FK -> Users (role: service_provider)
            $table->string('name');  // Tên nhà cung cấp dịch vụ
            $table->string('avatar')->nullable();  // Ảnh đại diện nhà cung cấp dịch vụ (có thể null)
            $table->text('description')->nullable();  // Mô tả nhà cung cấp (có thể null)
            $table->string('contact_person');  // Người liên hệ
            $table->string('contact_phone');  // Số điện thoại liên hệ
            $table->timestamps();  // created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
