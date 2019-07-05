<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('des')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->string('thumbnail_name')->nullable();
            $table->string('cat_name')->nullable();
            $table->text('content')->nullable();
            $table->integer('pos')->nullable()->default(0);
            $table->boolean('publish')->nullable()->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('categories');
    }
}
