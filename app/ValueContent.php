<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class ValueContent extends Model
{
    use Eloquence;

    protected $table = 'value_content';
    
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
