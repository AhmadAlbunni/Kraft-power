<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    use HasFactory;
    protected $table = 'attributes';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = array('name','value','product_id');

    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id');
    }

}
