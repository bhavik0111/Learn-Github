<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecentWork extends Model
{
    use HasFactory;
    protected $table = 'recent_work';

    protected $fillable = [
        'category',
        'image',
        'status',
    ];
}
