<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Casts\Json;

class Product extends Model
{
    protected $fillable = ['id', 'title', 'tagline', 'slug', 'description', 'link', 'link_text', 'is_featured', 'is_active', 'display_order'];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATETIME_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATETIME_FORMAT,
    ];

    protected $with = ['categories', 'file'];

    public function categories()
    {
        return $this->belongsToMany(Category::class)->select('categories.id', 'name');
    }

    public function file()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', image());
    }

}
