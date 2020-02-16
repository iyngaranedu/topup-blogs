<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comments',255)->nullable();
            $table->string('added_by',155)->nullable();
            $table->string('added_from_ip',45)->nullable();
            $table->unsignedBigInteger('tbl_posts_id')->nullable();
            $table->timestamps();

            $table->foreign('tbl_posts_id')
                ->references('id')->on('tbl_posts')
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
        Schema::dropIfExists('tbl_comments');
    }
}
