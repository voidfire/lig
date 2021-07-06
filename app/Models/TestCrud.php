<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;

class TestCrud extends Model 
{
    use HasSlug;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
}
