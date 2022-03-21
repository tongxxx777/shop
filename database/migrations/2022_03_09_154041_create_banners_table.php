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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('image', 50)->comment('图片');
            $table->unsignedSmallInteger('order')->default(1)->comment('顺序');
            $table->boolean('is_show')->default(true)->comment('是否展示');

            $table->timestamps();
            $table->softDeletes();
        });
        \DB::statement("ALTER TABLE `banners` comment '轮播图'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
};
