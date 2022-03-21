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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('名称');
            $table->text('description')->comment('详情');
            $table->string('image')->comment('封面图');
            $table->boolean('on_sale')->default(true)->comment('是否正在售卖');
            $table->float('rating')->default(5)->comment('平均评分');
            $table->unsignedInteger('sold_count')->default(0)->comment('销量');
            $table->unsignedInteger('review_count')->default(0)->comment('评价数量');
            $table->decimal('price', 10, 2)->comment('SKU 最低价格');
            
            $table->timestamps();
            $table->softDeletes();
        });
        \DB::statement("ALTER TABLE `products` comment '商品'");
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
};
