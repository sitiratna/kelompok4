<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->bigInteger('like')->default(0);
            $table->bigInteger('dislike')->default(0);
            $table->unsignedInteger('user_id');

            $table->timestamps();
            $table->softDeletes();

            //Relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
