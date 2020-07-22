<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table = 'products'; указать при сложном названии
    // protected $primaryKey = 'id';
    protected $fillable = ['title','slug','price','description']; //указывает что можно заполнять автоматически
    public $timestamps = false;

}
