<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prod extends Model
{
    use HasFactory;
    protected $fillable=['name','price','desc','image','cate_id'];
    public function cates(){
        return $this->belongsTo(Cate::class , 'cate_id' , 'id');
    }
    public function carts(){
        return $this->belongsTo(Cart::class , 'prod_id' , 'id');
    }
}
