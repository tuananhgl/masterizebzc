<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta_key')->nullable();
            $table->text('meta_value')->nullable();
            $table->integer('product_id')->nullable()->default(0);
            $table->index('product_id');
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
        Schema::dropIfExists('product_meta');
    }
}
