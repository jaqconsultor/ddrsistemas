<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    const STATUS_ACTIVO = 'activo';
    const STATUS_NOACTIVO = 'noactivo';

    protected $fillable = [
        'name',
        'slug',
        'details',
        'price',
        'shipping_cost',
        'description',
        'category_id',
        'brand_id',
        'image_path',
    ];

    protected $appends = [
        'image_url',
    ];

    public function getImageUrlAttribute()
    {
        if ($this->image_path && Storage::disk('imagesproduct')->exists($this->image_path)) {
            return Storage::disk('imagesproduct')->url($this->image_path);
        }

        return asset('noimage.png');
    }
}
