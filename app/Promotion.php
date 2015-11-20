<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'tbl_promotions';
    public $timestamps = false;
    protected $fillable = ['name','description','discount','start_date','end_date'];

}
