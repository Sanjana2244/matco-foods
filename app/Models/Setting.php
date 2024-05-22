<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATETIME_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATETIME_FORMAT,
    ];
}
