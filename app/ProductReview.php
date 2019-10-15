<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
