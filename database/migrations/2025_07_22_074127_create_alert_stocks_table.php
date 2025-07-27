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
        Schema::create('alerte_stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reference_id');

            // Corriger la définition de la clé étrangère
            $table->foreign('reference_id')
                  ->references('id') // On se réfère à la colonne 'id' de la table 'references'
                  ->on('references') // Table 'references'
                  ->onDelete('cascade'); // Suppression en cascade

            $table->integer('quantite');
            $table->integer('quantite_seuil');
            $table->text('notification');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alerte_stocks');
    }
};
