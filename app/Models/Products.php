<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;
    protected $with = ['category'];

    public function category():BelongsTo{
        return $this->belongsTo(Categories::class, 'id_category');
    }
}
