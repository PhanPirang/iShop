<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_products';
    public $timestamps = false;
    protected $fillable = ['name','description','image_path','cat_id','p_s_id','promotion_id'];

}
