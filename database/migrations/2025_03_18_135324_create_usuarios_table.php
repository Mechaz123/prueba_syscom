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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 80);
            $table->string("correo_electronico", 80);
            $table->foreignId("id_rol")->nullable()->constrained('roles')->onDelete("set null");
            $table->date("fecha_ingreso");
            $table->longText("firma");
            $table->string("contrato");
            $table->date("fecha_eliminacion")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
