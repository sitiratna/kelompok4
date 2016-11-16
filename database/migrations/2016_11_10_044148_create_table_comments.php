<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->bigInteger('like')->default(0);
            $table->bigInteger('dislike')->default(0);
            $table->unsignedInteger('articles_id');
            $table->unsignedInteger('comments_id');

            $table->timestamps();
            $table->softDeletes();

            //Relation
            $table->foreign('articles_id')->references('id')->on('articles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('comments_id')->references('id')->on('comments')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
