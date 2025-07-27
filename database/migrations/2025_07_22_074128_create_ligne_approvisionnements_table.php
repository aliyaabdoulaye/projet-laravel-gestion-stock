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
        Schema::create('ligne_approvisionnements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('approvisionnement_id')->constrained('approvisionnements')->onDelete('cascade');
            $table->foreignId('lot_produit_id')->constrained('lot_produits')->onDelete('cascade');
            $table->integer('quantite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_approvisionnements');
    }
};
