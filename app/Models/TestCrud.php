<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use A17\Twill\Models\Behaviors\HasMedias;

class TestCrud extends Model 
{
    use HasSlug, HasMedias;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [ // role name
            'default' => [ // crop name
                [
                    'name' => 'default', // ratio name, same as crop name if single
                    'ratio' => 16 / 9, // ratio as a fraction or number
                ],
                
            ],
            'mobile' => [
                [
                    'name' => 'landscape', // ratio name, multiple allowed
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait', // ratio name, multiple allowed
                    'ratio' => 3 / 4,
                ],
            ],
        ]
    ];
}
