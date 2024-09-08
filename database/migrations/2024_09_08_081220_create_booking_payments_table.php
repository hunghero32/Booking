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
        Schema::create('booking_payments', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');  // FK liên kết với bảng Bookings, nếu booking bị xóa thì các thanh toán liên quan cũng bị xóa
            $table->foreignId('wallet_transaction_id')->constrained('wallet_transactions')->onDelete('cascade');  // FK liên kết với bảng WalletTransactions
            $table->decimal('amount', 15, 2);  // Số tiền thanh toán
            $table->enum('payment_status', ['Paid', 'Unpaid'])->default('Unpaid');  // Trạng thái thanh toán, mặc định là 'Unpaid'
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_payments');
    }
};
