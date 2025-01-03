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
        Schema::create('taches', function (Blueprint $table) {
            $table->id(); // ID auto-incrémenté (clé primaire)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relation avec la table users
            $table->string('titre'); // Titre de la tâche
            $table->text('description')->nullable(); // Description de la tâche
            $table->enum('statut', ['en_attente', 'terminee'])->default('en_attente'); // Statut de la tâche
            $table->date('date_limite')->nullable(); // Date limite pour la tâche
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
