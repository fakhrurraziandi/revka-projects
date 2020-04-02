<?php

namespace App;

use Sofa\Eloquence\Eloquence;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use Eloquence;
    protected $table = 'contact_messages';
    protected $fillable = [
        'name',
        'email',
        'message'
    ];

    protected $searchableColumns = [
        'name',
        'email',
        'message'
    ];
}
