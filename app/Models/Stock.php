<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'attributes', 'quantity'];


    // protected array $translatable = ['attributes'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
