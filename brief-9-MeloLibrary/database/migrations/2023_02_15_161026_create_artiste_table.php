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
        Schema::create('artiste', function (Blueprint $table) {
            $table->id('id_artiste');
            $table->string('nom');
            $table->date('date_naissqance');
            $table->binary('image');
            // $table->foreign('id_band')->references('id_band')->on('bande')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artiste');
    }
};
