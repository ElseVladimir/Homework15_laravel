<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products'; указать при сложном названии
    // protected $primaryKey = 'id';
    protected $fillable = ['categorie_id','title','slug','price','description']; //указывает что можно заполнять автоматически

    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categorie(){
        return $this->belongsTo(Category::class);
    }

}
