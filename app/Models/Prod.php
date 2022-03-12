<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prod extends Model
{
    use HasFactory;
    protected $fillable=['name','price','desc','image','cate_id'];
    public function cates(){
        return $this->belongsTo(Cate::class , 'cate_id' , 'id');
    }
}
