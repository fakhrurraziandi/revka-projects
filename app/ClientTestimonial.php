<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class ClientTestimonial extends Model
{
    use Eloquence;

    protected $table = 'client_testimonial';
    
    protected $fillable = [
        'name',
        'testimonial',
        'image_file',
    ];

    protected $searchableColumns = [
        'name',
        'testimonial',
        'image_file',
    ];

    public $appends = ['image_url'];

    public function getImageUrlAttribute()
    {
        return url($this->image_file);
    }
}
