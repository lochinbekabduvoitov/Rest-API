<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Value extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'attribute_id', 'product_id'];

    public array $translatable= ['name'];

    public function attributes()
    {
        $this->belongsTo(Attribute::class);
    }
}
