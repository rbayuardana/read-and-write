<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['prodtypeId', 'prodnama','stock','desc','price','image'];
    public function ProdType(){
        return $this->belongsTo(ProdType::class, 'prodtypeId');
    }
}
