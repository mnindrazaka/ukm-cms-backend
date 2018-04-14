<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukm', function (Blueprint $table) {
            $table->string('id_ukm', 20)->primary();
            $table->string('nama', 20);
            $table->string('singkatan', 10);
            $table->longText('visi_misi')->nullable();
            $table->longText('detail')->nullable();
            $table->string('email', 30)->nullable();
            $table->string('telepon', 15)->nullable();
            $table->string('logo', 50);
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
        Schema::dropIfExists('ukm');
    }
}
