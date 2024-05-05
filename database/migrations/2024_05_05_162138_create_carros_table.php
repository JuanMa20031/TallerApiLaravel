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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->decimal('precio', 10, 2);
            $table->text('descripcion')->nullable();
            $table->boolean('disponible')->default(true);
            $table->enum('tipo_combustible', ['Gasolina', 'Diesel', 'Eléctrico', 'Híbrido']);
            $table->dateTime('fecha_fabricacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
