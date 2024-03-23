<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSepatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepatus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sepatu', 100);
            $table->char('merk', 15);
            $table->integer('stok');
            $table->char('warna', 20);
            $table->bigInteger('id_supplier');
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
        Schema::dropIfExists('sepatus');
    }
}
