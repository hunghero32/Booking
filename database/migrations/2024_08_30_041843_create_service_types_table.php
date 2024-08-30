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
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->string('name');  // Tên loại dịch vụ (ví dụ: khách sạn, tour, vận chuyển, nhà hàng)
            $table->text('description')->nullable();  // Mô tả loại dịch vụ (có thể null)
            $table->timestamps();  // Ngày tạo và ngày cập nhật (created_at và updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_types');
    }
};
