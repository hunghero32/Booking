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
        Schema::create('services', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('service_type_id')->constrained('service_types')->onDelete('cascade');  // FK đến bảng ServiceTypes
            $table->foreignId('provider_id')->constrained('providers')->onDelete('cascade');  // FK đến bảng Providers
            $table->string('name');  // Tên dịch vụ
            $table->text('description')->nullable();  // Mô tả dịch vụ (có thể null)
            $table->decimal('price', 13, 2);  // Giá cung cấp dịch vụ, với 13 chữ số và 2 chữ số thập phân
            $table->string('location');  // Địa điểm dịch vụ
            $table->integer('capacity')->unsigned();  // Khả năng phục vụ tối đa
            $table->boolean('is_active')->default(true);  // Trạng thái hoạt động (true = Active, false = Inactive)
            $table->timestamps();  // Ngày tạo và ngày cập nhật (created_at và updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
