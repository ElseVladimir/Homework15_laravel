<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title','slug','intro','content'];
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
