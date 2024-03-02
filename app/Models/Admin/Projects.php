<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'all_project';

    protected $fillable = [
        'project_type',
        'image',
        'description',
        'status',
    ];
}
