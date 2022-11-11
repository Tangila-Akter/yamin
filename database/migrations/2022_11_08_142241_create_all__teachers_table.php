<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all__teachers', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->string("Position")->nullable();
            $table->string("Facebook")->nullable();
            $table->string("YouTube")->nullable();
            $table->string("Linkedin")->nullable();
            $table->string("image")->nullable();
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
        Schema::dropIfExists('all__teachers');
    }
};
