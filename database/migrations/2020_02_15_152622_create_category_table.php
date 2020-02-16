<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',45)->nullable();
            $table->text('description')->nullable();
            $table->string('banner_image',45)->nullable();
            $table->unsignedBigInteger('tbl_categories_id')->nullable();
            $table->timestamps();

            $table->foreign('tbl_categories_id')
                ->references('id')->on('tbl_categories')
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
        Schema::dropIfExists('tbl_categories');
    }
}
