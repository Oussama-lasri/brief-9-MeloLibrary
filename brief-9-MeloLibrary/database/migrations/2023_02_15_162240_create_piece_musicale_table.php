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
        Schema::create('piece_musicale', function (Blueprint $table) {
            $table->id('id_piece');
            $table->string('image_piece');
            $table->time('durée');
            $table->string('reference_music');
            $table->string('langue');
            $table->date('date_de_sortie');
            $table->longText('paroles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_musicale');
    }
};
