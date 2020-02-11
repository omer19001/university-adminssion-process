<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Universities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('universities', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description');
            $table->string('image')->default(0);
            $table->string('url');
            $table->string('major')->nullable();
            $table->integer('grade_id');
            $table->integer('tofel_from');
            $table->integer('tofel_to');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('universities');
    }
}
