<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    use HasFactory;
    protected $table = 'product_attributes';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = array('name','value','product_id');

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }

}
