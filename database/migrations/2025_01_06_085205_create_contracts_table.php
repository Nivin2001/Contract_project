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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('party_1')->constrained('users')->onDelete('cascade');
            $table->foreignId('party_2')->constrained('users')->onDelete('cascade');
            $table->string('contract_number')->unique();
            $table->date('contract_date');
            $table->string('contract_address', 255);
            $table->string('wood_type');
            $table->string('column_cladding');
            $table->decimal('total_area', 10, 2);
            $table->decimal('square_meter', 10, 2);
            $table->decimal('total_value', 10, 2);
            $table->decimal('paid_amount', 10, 2)->default(0);
            $table->decimal('remaining_amount', 10, 2);
            $table->integer('work_duration');
            $table->string('price_quote_number');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
