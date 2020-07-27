<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['categories','slug'];
    public $timestamps = false;

    public function products(){
        return $this->hasmany(Product::class, 'categorie_id','id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
