<?php

namespace App\Models;

class Product extends Model
{
    // 关联 商品SKU
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }
}
