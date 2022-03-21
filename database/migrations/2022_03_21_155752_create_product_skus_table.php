<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_skus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_id')->comment('商品');
            $table->string('title')->comment('名称');
            $table->string('description')->comment('详情');
            $table->decimal('price', 10, 2)->comment('价格');
            $table->unsignedInteger('stock')->comment('库存'); 
            
            $table->timestamps();
            $table->softDeletes();
        });
        \DB::statement("ALTER TABLE `product_skus` comment '商品SKU'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_skus');
    }
};
