<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distro extends Model
{
    use HasFactory;

    protected $table = 'distro';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'difficulty',
        'old_hardware',
        'appearance',
        'focus',
        'description',
        'download_page',
        'logo_url',
        'recommended'
    ];

    protected $casts = [
        'appearance' => 'string',
        'focus' => 'string',
    ];
}
