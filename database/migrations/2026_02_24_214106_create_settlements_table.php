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
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payer_id')->constrained('users')->onDelete('cascade'); // who pays
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade'); // who receives
            $table->decimal('amount', 10, 2);
            $table->timestamp('paid_at')->useCurrent();
            $table->foreignId('colocation_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settlements');
    }
};
