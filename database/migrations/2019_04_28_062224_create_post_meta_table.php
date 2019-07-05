<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_key')->nullable();
            $table->text('meta_value')->nullable();
            $table->integer('post_id')->nullable()->default(0);
            $table->index('post_id');
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
        Schema::dropIfExists('post_meta');
    }
}
