<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['id', 'title', 'description', 'link', 'link_text', 'is_active', 'display_order'];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATETIME_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATETIME_FORMAT,
    ];

    protected $with = ['file'];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', image());
    }
}
