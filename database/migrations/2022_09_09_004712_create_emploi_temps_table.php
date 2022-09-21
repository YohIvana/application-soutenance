<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_temps', function (Blueprint $table) {
            $table->string('nom_emploi');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('semaine_id')->constrained('semaines');
            $table->foreignId('legende_id')->constrained('legende');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emploi_temps');
    }
};
