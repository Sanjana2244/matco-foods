<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATETIME_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATETIME_FORMAT,
    ];

    public $appends = ['url', 'filename'];

    public function getUrlAttribute()
    {
        return url($this->path);
    }

    public function getFilenameAttribute()
    {
        return basename($this->path);
    }

    public function fileable()
    {
        return $this->morphTo();
    }
}
