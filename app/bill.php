<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bill';
    protected $primaryKey = 'id';
    public function order(){
        return $this->hasMany(orders::class,'bill_id');
    }
    public function customer(){
        return $this->hasOne(custormer::class,'id');
    }
}
