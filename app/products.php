<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    public function category(){
        return $this -> belongsTo(category::class,'id');
    }
}
