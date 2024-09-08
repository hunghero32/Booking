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
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->id();  // Khóa chính
            $table->foreignId('wallet_id')->constrained('wallets')->onDelete('cascade');  // FK đến bảng Wallets, nếu ví bị xóa thì các giao dịch sẽ bị xóa
            $table->enum('transaction_type', ['Deposit', 'Withdrawal', 'Payment']);  // Loại giao dịch (Nạp tiền, Rút tiền, Thanh toán)
            $table->decimal('amount', 15, 2);  // Số tiền giao dịch, lưu dưới dạng decimal
            $table->timestamp('transaction_date');  // Ngày thực hiện giao dịch
            $table->string('description')->nullable();  // Mô tả giao dịch (có thể null)
            $table->enum('status', ['Pending', 'Completed', 'Failed'])->default('Pending');  // Trạng thái giao dịch, mặc định là 'Pending'
            $table->timestamps();  // Ngày tạo và ngày cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallet_transactions');
    }
};
