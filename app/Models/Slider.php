<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Agent\Agent;

class Slider extends Model
{
    protected $fillable = ['id', 'title', 'tagline', 'description', 'link', 'link_text', 'is_featured', 'is_active', 'type', 'display_order'];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATETIME_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATETIME_FORMAT,
    ];

    protected $with = ['file', 'mobileFile'];

    protected $appends = ['responsive_file_url'];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', image());
    }

    public function mobileFile()
    {
        return $this->morphOne(File::class, 'fileable')->where('type', mobileImage());
    }

    public function getResponsiveFileUrlAttribute()
    {
        $agent = new Agent();
        if($agent->isMobile()){
            return $agent->isMobile() ? optional($this->mobileFile)->url : optional($this->file)->url;
        }else{
            return optional($this->file)->url;
        }
    }
}
