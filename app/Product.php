<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_products';
    public $timestamps = false;
    protected $fillable = ['name','price','description','image_path','cat_id','p_s_id','promotion_id'];

    public function category()
    {
        return $this->belongsTo('App\Category','id');

    }



}
