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
            $table->string('name');
            $table->integer('author')->comment('mã store hoặc admin');
            $table->unsignedInteger('category_id');
            $table->string('slug');
            $table->text('galeries')->nullable();
            $table->text('description')->nullable();
            $table->text('detail')->nullable();
            $table->text('property')->nullable();
            $table->double('price')->nullable();
            $table->double('price_old')->nullable();
            $table->string('image');
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_highlight')->default(0);
            $table->boolean('active')->default(1);
            $table->boolean('best_sale')->default(0);
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
