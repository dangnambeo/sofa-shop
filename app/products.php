<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    public function category(){
        return $this -> belongsTo(category::class,'cate_id');
    }
    public function discount(){
        return $this -> belongsTo(discount::class,'discount_id');
    }
}
