<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends Model
{
    use HasFactory;

    protected $table = 'product_tags';
    public $timestamps = true;
    protected $fillable = array('tag');

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
