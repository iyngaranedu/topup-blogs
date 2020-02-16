<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_blogs_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tbl_posts_id')->nullable();
            $table->unsignedBigInteger('tbl_tags_id')->nullable();

            $table->foreign('tbl_posts_id')
                ->references('id')->on('tbl_posts')
                ->onDelete('cascade');

            $table->foreign('tbl_tags_id')
                ->references('id')->on('tbl_tags')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_blogs_tags');
    }
}
