<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    use HasFactory;
    protected $fillable=['title','desc','image'];
    public function prods(){
        return $this->hasMany(Prod::class , 'cate_id' , 'id');
    }
}
