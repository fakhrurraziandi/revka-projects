<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class HeaderCarousel extends Model
{
    use Eloquence;

    protected $table = 'header_carousel';
    
    protected $fillable = [
        'title',
        'subtitle',
        'link_url',
        'link_text',
        'image_file',
    ];

    protected $searchableColumns = [
        'title',
        'subtitle',
        'link_url',
        'link_text',
        'image_file',
    ];

    public $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return url($this->image_file);
    }
}
