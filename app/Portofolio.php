<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use Eloquence;

    protected $table = 'portofolio';
    
    protected $fillable = [
        'title',
        'description',
        'image_file',
    ];

    protected $searchableColumns = [
        'title',
        'description',
        'image_file',
    ];

    public $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return url($this->image_file);
    }
}
