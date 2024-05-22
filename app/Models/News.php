<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'display_order', 'title', 'description', 'date','is_featured', 'is_active', 'is_news', 'is_event'];

    protected $casts = [
        'date' => 'datetime:'.Constant::DATE_FORMAT,
        'created_at' => 'datetime:'.Constant::DATETIME_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATETIME_FORMAT,
    ];

    protected $with = ['file', 'mobileFile'];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', image());
    }

    public function mobileFile()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', mobileImage());
    }
}
