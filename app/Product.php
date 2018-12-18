<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //


    protected $fillable=[
             'category',
             'title',
             'slug',
             'description',
             'price',
             'discount'
    ];
    protected $hidden=['category'];
    public function product(){
     	return $this->belongsTo('App\Category');
     }
}
