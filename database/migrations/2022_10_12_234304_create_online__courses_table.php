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
        Schema::create('online__courses', function (Blueprint $table) {
            $table->id();
           // $table->intger("instractor_id")->nullable();
            $table->string("title")->nullable();
            $table->string("regular_fee")->nullable();
            $table->string("discount_fee")->nullable();
            $table->string("course_type")->nullable();
// new addwe field
            $table->text("course_purpuse")->nullable();
            $table->text("course_about")->nullable();
            $table->text("course_slybus")->nullable();
            $table->string("video_link")->nullable();
            $table->string("ins_image")->nullable();
            $table->string("ins_name")->nullable();
            $table->string("ins_details")->nullable();
// end new added field
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
        Schema::dropIfExists('online__courses');
    }
};
