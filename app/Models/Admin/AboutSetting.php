<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSetting extends Model
{
    use HasFactory;
    protected $table = 'about_us';

    protected $fillable = [
        'title',
        'desc',
        'image',
    ];
}
