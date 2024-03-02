<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    protected $table = 'practice_ajax_form';

    protected $fillable = [
        'full_name',
        'work',
        'status',
    ];

}
