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
        Schema::create('asiento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('seccion_id')->constrained('seccion');
            $table->integer('numero_asiento');
            $table->boolean('disponibilidad_asiento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asiento');
    }
};
