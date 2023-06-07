<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    use HasFactory;
    protected $table = 'product_media';
    protected $fillable = array('image_name','image_url','status','sort_number','product_id');


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
