<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
    public function setDescriptionAttribute($value){
        $this->attributes['description'] = ucfirst($value);
    }

    public function cart_item()
    {
        return $this->hasOne(CartItem::class);
    }
}
