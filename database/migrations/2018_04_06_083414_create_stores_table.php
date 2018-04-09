<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->integer('province_id')->comment('id tỉnh, thành phố');
            $table->integer('district_id')->comment('id quận huyện');
            $table->string('address')->comment('địa chỉ chi tiết');
            $table->string('website')->comment('tên miền website');
            $table->text('carreer_id')->comment('list id ngành nghề');
            $table->string('business_license')->comment('Ảnh giấy phép kinh doanh');
            $table->string('registration_certificate')->comment('ảnh giấy chứng nhận đăng ký');
            $table->string('brand_id')->comment('list id nhãn hiệu kinh doanh');
            $table->string('business_area')->comment('id khu vực kinh doanh');
            $table->string('special_product')->comment('sản phẩm đặc biệt');
            $table->integer('product_id')->comment('id sản phẩm');

            $table->integer('status')->default(0)->comment('trạng thái: default = 0; status = 1 active ');
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
        Schema::dropIfExists('stores');
    }
}
