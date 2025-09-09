<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->unique();
            $table->date('start_date');
            $table->decimal('capital_amount', 15, 2);
            $table->enum('status', ['active', 'pending', 'closed'])->default('pending');
            $table->foreignId('fund_id')->constrained('funds')->cascadeOnDelete();
            $table->foreignId('investor_id')->constrained('investors')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
