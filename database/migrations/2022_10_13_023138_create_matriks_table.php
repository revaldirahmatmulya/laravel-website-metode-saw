<?php

use App\Models\Alternatif;
use App\Models\Bobot;
use App\Models\Skala;
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
        Schema::create('matriks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Alternatif::class, 'id_alternatif');
            $table->foreign('id_alternatif')->references('id')->on('alternatifs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Bobot::class, 'id_bobot');
            $table->foreign('id_bobot')->references('id')->on('bobots')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Skala::class, 'id_skala');
            $table->foreign('id_skala')->references('id')->on('skalas')->onDelete('cascade')->onUpdate('cascade');
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriks');
    }
};