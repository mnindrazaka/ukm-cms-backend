<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id_artikel');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_kategori');
            $table->string('id_ukm', 20);
            $table->string('judul', 255);
            $table->longText('isi');
            $table->timestamps();

            $table->foreign('id_ukm')->references('id_ukm')->on('ukm')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_user')->references('id_user')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')
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
        Schema::dropIfExists('artikel');
    }
}
