<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [ // data yang dapat diisi secara massal
        'name',
        'category',
        'description',
        'price',
        'is_available',
    ];

    protected $casts = [ // casting data ke tipe data boolean, laravel default menyimpan boolean dengan true=1 dan false=0
        'is_available' => 'boolean',
    ];
}
