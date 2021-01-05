<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('react_comment')){
            Schema::create('react_comment', function (Blueprint $table) {
                $table->Integer('user_id')->unsigned();
                $table->Integer('comment_id')->unsigned();
                $table->Integer('reactionEmoji')->unsigned();
                $table->Integer('reactAmount');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('comment_id')->references('id')->on('post_comment')->onDelete('cascade');
                $table->foreign('reactionEmoji')->references('id')->on('reaction_emoji')->onDelete('cascade');
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
        Schema::dropIfExists('react_comment');
    }
}
