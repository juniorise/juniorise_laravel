<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('react')){
            Schema::create('react', function (Blueprint $table) {
                $table->Integer('user_id')->unsigned();
                $table->Integer('posted_by')->unsigned();
                $table->Integer('reactionEmoji')->unsigned();
                $table->Integer('reactAmount');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('posted_by')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('react');
    }
}
