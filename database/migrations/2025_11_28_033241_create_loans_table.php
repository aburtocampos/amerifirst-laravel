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
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('promissory_note'); // nombre o número
        $table->date('date_signed')->nullable();
        $table->decimal('principal', 12, 2);
        $table->decimal('interest', 12, 2);
        $table->decimal('total', 12, 2);
        $table->date('due_date')->nullable();
        $table->string('file_url')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
