<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string("address", 75);
            $table->string("postal_code", 10);
            $table->string("city", 70);
            $table->string("country", 50);
            // $table->unsignedTinyInteger('rooms');
            $table->tinyInteger('rooms')->unsigned();
            $table->unsignedSmallInteger('sqm');
            $table->float('price', 11, 2);
            $table->year('year')->nullable();
            $table->text('description')->nullable();
            $table->boolean("furnished")->default(true);
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
        Schema::dropIfExists('houses');
    }
}
