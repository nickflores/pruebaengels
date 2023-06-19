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
        Schema::create('pnosotros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->text('texto')->nullable();
            $table->string('imagen')->nullable();
            $table->string('titulo2')->nullable();
            $table->text('texto2')->nullable();
            $table->string('imagen2')->nullable();
            $table->string('titulo3')->nullable();
            $table->text('texto3')->nullable();
            $table->string('imagen3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pnosotros');
    }
};
