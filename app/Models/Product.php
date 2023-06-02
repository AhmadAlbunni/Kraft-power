<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = array('name', 'sku', 'description','price','image_name','image_url','category_id','status','sort_number','meta_title','meta_description',);


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category', 'product_id', 'category_id');
    }


    public function attributes()
    {
        return $this->hasMany(Attributes::class, 'product_id');
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
