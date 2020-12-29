<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('post_comment')){
            Schema::create('post_comment', function (Blueprint $table) {
                $table->increments('id');
                $table->Integer('post_id')->unsigned();
                $table->Integer('commented_by')->unsigned();
                $table->longText('message');
                $table->timestamp('commented_at');
                $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
                $table->foreign('commented_by')->references('id')->on('users')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_comment');
    }
}
