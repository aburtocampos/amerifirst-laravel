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
    Schema::create('opportunities', function (Blueprint $table) {
        $table->id();
        $table->enum('type', ['short', 'long']);
        $table->string('opportunity_number');
        $table->string('customer_name')->nullable();
        $table->string('contract_file')->nullable();
        $table->decimal('principal', 12, 2);
        $table->decimal('interest', 12, 2);
        $table->integer('turnaround_days')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
