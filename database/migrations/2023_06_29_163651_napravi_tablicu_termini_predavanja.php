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
        Schema::create('termini_predavanja', function (Blueprint $table) {
            $table->id();
            $table->time('satnica');
            $table->foreignId('ucionica_id')->constrained('ucionica');
            $table->foreignId('predmet_id')->nullable()->constrained('predmeti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('termini_predavanja');
    }
};
