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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre de l'article
            $table->text('description'); // Description de l'article
            $table->string('auteur');
            $table->date('date');
            $table->string('image')->nullable(); // Chemin de l'image, nullable si pas obligatoire
            $table->timestamps(); // Les colonnes created_at et updated_a
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
