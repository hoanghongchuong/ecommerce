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
            $table->unsignedInteger('admin_id');
//            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('name', 200);
            $table->string('slug', 250);
            $table->boolean('is_highlight')->default(0)->comment('danh mục nổi bật');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('keyword')->nullable();
            $table->text('title')->nullable();
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
