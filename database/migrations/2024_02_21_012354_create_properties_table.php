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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_no');
            $table->string('property_name');
            $table->text('description');
            $table->char('measurement_unit', 5);
            $table->integer('unit_value');
            $table->date('acquisition_date');
            $table->foreignId('received_from')->constrained('employees');
            $table->foreignId('assigned_to')->constrained('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
