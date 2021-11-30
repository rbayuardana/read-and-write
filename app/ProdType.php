<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdType extends Model
{
    protected $fillable = ['nama', 'img'];
    protected $table = 'prodtypes';
    public function Product(){
        return $this->hasMany(Product::class);
    }
}
