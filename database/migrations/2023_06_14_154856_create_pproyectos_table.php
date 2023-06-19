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
        Schema::create('pproyectos', function (Blueprint $table) {
            $table->id();
            $table->string('imagen')->nullable();
            $table->string('titulo')->nullable();
            $table->text('dato1')->nullable();
            $table->text('dato2')->nullable();
            $table->text('dato3')->nullable();
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pproyectos');
    }
};
