<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    use HasFactory;
    protected $table = 'global_settings';

    protected $fillable = [
        'favicon',
        'site_title',
        'logo',

        'address',
        'address2',
        'phone_no',
        'mobile_no',
        'email',
        'web',

        'facebook',
        'instagram',
        'youtube',

        'working_time',

        'google_map',
        'copyright_msg',
    ];

}
