<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkSolution extends Model
{
    use HasFactory;
    protected $table = 'work_solution';

    protected $fillable = [
        'image',
        'title',
        'description',
        'status',
    ];
}
