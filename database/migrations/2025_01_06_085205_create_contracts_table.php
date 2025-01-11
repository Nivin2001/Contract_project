<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('contract_number')->nullable();
            $table->string('city')->nullable();
            $table->date('contract_date')->nullable();
            $table->string('representative_1')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('guarantor_2')->nullable();
            $table->string('city_2')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('implementation')->nullable();
            $table->string('wood_type')->nullable();
            $table->string('column_cladding')->nullable();
            $table->decimal('total_area', 8, 2)->nullable();
            $table->decimal('price_per_square_meter', 8, 2)->nullable();
            $table->decimal('total_value', 10, 2)->nullable();
            $table->string('work_duration')->nullable();
            $table->date('start_date')->nullable();
            $table->string('price_quote_number')->nullable();
            $table->string('quote_city')->nullable();
            $table->text('notes')->nullable();
            $table->decimal('paid_amount', 10, 2)->nullable()->default(0);
            $table->decimal('remaining_amount', 10, 2)->nullable();

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
