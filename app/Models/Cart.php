<?php

namespace App\Models;

use App\Models\Prod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=['prod_id','user_id'];
    // protected $guarded = [];
    public function prod(){
        return $this->belongsTo(Prod::class , 'prod_id');
    }
}
