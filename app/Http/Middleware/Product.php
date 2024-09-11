<?php

namespace App\Http\Controllers;

<?php

namespace App\Http\Controllers;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock'];
}

// CartItem.php
class CartItem extends Model
{
    protected $fillable = ['product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
