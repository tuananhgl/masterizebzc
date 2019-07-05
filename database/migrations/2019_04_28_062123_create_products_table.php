<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->text('des')->nullable();
            $table->text('content')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->string('thumbnail_name')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price_vat')->nullable();
            $table->integer('vat')->nullable()->default(0);
            $table->integer('cat_id')->nullable()->default(0);
            $table->integer('pos')->nullable()->default(0);
            $table->boolean('publish')->default(false);
            $table->integer('created_user')->nullable()->default(0);
            $table->integer('updated_user')->nullable()->default(0);
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
        Schema::dropIfExists('products');
    }
}
