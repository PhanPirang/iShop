<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'tbl_slides';
    public $timestamps = false;
    protected $fillable = ['caption','description','image_url','status','order'];
}