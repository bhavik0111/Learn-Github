<?php

use App\Models\Admin\PartnerLogo;
use App\Models\Admin\GlobalSetting;


if (!function_exists('getSetting')) {

    function getSetting()
    {
        $global = GlobalSetting::first();
        return ($global);
    }

    function getLogo()
    {
        $logos = PartnerLogo::where('status', 1)->get();
        return ($logos);
    }

}
