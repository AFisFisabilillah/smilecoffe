<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_product', 'id_user'];

    public function products() : BelongsTo {
        return $this->belongsTo(Products::class, "id_product");
    }
    
    
}
