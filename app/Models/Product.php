<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

//    public function getImageUrl()
//    {
//        return asset('public' . Storage::url($this->path));
//    }

    public function getImageUrl()
    {
        return asset('public' . Storage::url($this->path));
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
