<?php

namespace App\Models;

class ProductSku extends Model
{
    // 关联 商品
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
