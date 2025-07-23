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
        Schema::create('kreteria', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loker_id')->constrained('loker')->onDelete('cascade'); // Foreign key to loker table
            $table->string('nama_kreteria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kreteria');
    }
};
