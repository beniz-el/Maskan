<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonvalidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonvalids', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('a');
            $table->string('name');
            $table->string('type');
            $table->string('prix');
            $table->string('chambre');
            $table->string('salon');
            $table->string('bain');
            $table->string('cuisine');
            $table->string('surface');
            $table->string('description');
            $table->string('tel');
            $table->string('email');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('nonvalids');
    }
}
