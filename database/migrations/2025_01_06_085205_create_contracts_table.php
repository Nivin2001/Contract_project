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
            $table->string('contract_number');
            $table->string('city');
            $table->date('contract_date');
            $table->string('representative_1');
            $table->string('phone_1');
            $table->string('guarantor_2');
            $table->string('city_2');
            $table->string('neighborhood');
            $table->string('phone_2');
            $table->string('implementation');
            $table->string('wood_type');
            $table->string('column_cladding');
            $table->decimal('total_area', 8, 2);
            $table->decimal('price_per_square_meter', 8, 2);
            $table->decimal('total_value', 10, 2);
            $table->string('work_duration');
            $table->date('start_date');
            $table->string('price_quote_number');
            $table->string('quote_city');
            $table->text('notes')->nullable();
            $table->decimal('paid_amount', 10, 2)->default(0);
            $table->decimal('remaining_amount', 10, 2);

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
