<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sparepart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('spareparts', function (Blueprint $table) {
           $table->increments('id');
           $table->string('oracle_number', 50)->unique();
           $table->string('name');
           $table->string('stock');
           $table->string('unit');
           $table->string('price');
           $table->string('image');
           $table->string('machine_id');
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
        Schema::dropIfExists('spareparts');
    }
}
