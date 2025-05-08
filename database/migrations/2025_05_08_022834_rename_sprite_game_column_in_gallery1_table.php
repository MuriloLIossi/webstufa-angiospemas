<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSpriteGameColumnInGallery1Table extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('gallery1', function (Blueprint $table) {
            // Alterar o nome da coluna 'sprite-game' para 'sprite_game'
            $table->renameColumn('sprite-game', 'sprite_game');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gallery1', function (Blueprint $table) {
            // Reverter o nome da coluna 'sprite_game' para 'sprite-game'
            $table->renameColumn('sprite_game', 'sprite-game');
        });
    }
}
