<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $table = 'home_slider';

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];

}
