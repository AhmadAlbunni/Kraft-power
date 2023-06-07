<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = array('name', 'sku', 'description','price','image_name','image_url','category_id','status','sort_number','meta_title','meta_description',);


    public function category()
    {
        return $this->belongsTo(Category::class,  'category_id');
    }


    public function attributes()
    {
        return $this->hasMany(ProductAttributes::class, 'product_id');
    }

    public function media()
    {
        return $this->hasMany(ProductMedia::class, 'product_id');
    }

    public function tags()
    {
        return $this->hasMany(ProductTag::class, 'product_id');
    }



}
