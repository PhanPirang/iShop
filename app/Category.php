<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tbl_categories';
    public $timestamps = false;
    protected $fillable = ['name','description'];

    public function products()
    {
        return $this->hasMany('App\Product', 'cat_id');
    }
}