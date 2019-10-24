<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table= "products";

    public function type_product(){
        return $this->belongsTo('App\ProductType','id_type','id');//id nay la id cua san pham
    }
   
}
