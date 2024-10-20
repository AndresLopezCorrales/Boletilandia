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
        Schema::create('seccion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('evento_id')->constrained('evento');
            $table->string('letra_seccion');
            $table->decimal('precio', 10 , 2);
            $table->text('info-visibilidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seccion');
    }
};
