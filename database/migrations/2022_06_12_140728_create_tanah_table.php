<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanah', function (Blueprint $table) {
            $table->id();
            $table->integer('panjang_tanah');
            $table->integer('lebar_tanah');
            $table->integer('harga_tanah');
            $table->text('gambar_tanah');
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
        Schema::dropIfExists('tanah');
    }
}
