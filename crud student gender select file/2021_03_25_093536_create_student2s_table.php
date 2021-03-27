<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudent2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student2s', function (Blueprint $table) {
            $table->id();
            $table->string ('name');
            $table->string ('email');
            $table->string ('number');
            $table->string ('file');
            $table->string ('gender');
            $table->string ('option');
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
        Schema::dropIfExists('student2s');
    }
}
