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
    Schema::create('payments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('loan_id')->constrained()->onDelete('cascade');
        $table->string('payment_name');
        $table->date('due_date')->nullable();
        $table->enum('status', ['completed', 'scheduled'])->default('scheduled');
        $table->decimal('amount', 12, 2);
        $table->enum('concept', ['installment', 'balloon']);
        $table->decimal('amortization', 12, 2)->nullable();
        $table->decimal('interest', 12, 2)->nullable();
        $table->decimal('balance', 12, 2)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
