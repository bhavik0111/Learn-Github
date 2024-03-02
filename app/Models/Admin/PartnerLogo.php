<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLogo extends Model
{
    use HasFactory;
    protected $table = 'partner_logo';
    protected $fillable = [

        'image',
        'link',
        'status',
    ];
}
