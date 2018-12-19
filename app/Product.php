<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
<<<<<<< HEAD


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
=======
>>>>>>> db4c825b1e1e9566248a691f77f04eb121a7a1b1
}
