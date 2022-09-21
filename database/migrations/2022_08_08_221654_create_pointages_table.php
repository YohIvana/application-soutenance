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
        Schema::create('pointages', function (Blueprint $table) {
            
            $table->string('signature');
            $table->time('heure_A');
            $table->time('heure_D');
            $table->date('date');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
           
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pointages');
        
    }
};
