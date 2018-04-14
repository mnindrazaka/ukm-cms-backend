<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->increments('id_galeri');
            $table->unsignedInteger('id_user');
            $table->string('id_ukm', 20);
            $table->longText('detail');
            $table->string('file', 50);
            $table->timestamps();

            $table->foreign('id_ukm')->references('id_ukm')->on('ukm')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_user')->references('id_user')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeri');
    }
}
