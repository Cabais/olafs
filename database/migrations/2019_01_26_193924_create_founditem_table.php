<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFounditemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('founditem', function (Blueprint $table) {
            $table->increments('founditemid');
            $table->string('itemname');
            $table->longtext('itemphoto');
            $table->date('datefound');
            $table->string('itemtype');
            $table->text('description');
            $table->integer('status')->default(0);
            $table->integer('approval')->default(0);
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
        Schema::dropIfExists('founditem');
    }
}
