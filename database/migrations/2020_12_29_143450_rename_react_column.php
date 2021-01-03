<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameReactColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('react', function(Blueprint $table) {
            $table->dropForeign('react_posted_by_foreign'); 
            $table->renameColumn('posted_by', 'post_id'); 
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('react', function(Blueprint $table) {
            $table->dropForeign('react_post_id_foreign');
            $table->renameColumn('post_id', 'posted_by');
            $table->foreign('posted_by')->references('id')->on('posts')->onDelete('cascade');
        });
    }
}
