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
        Schema::create('lot_produits', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->date('date_peremption')->nullable();
            $table->decimal('prix_unitaire', 10, 2);
            $table->foreignId('reference_id')->constrained('references')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lot_produits');
    }
};
