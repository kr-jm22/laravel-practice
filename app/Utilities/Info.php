<?php

namespace App\Utilities;

class Info
{
    protected static $officeIps = [
        '192.168.0.1',
        '192.168.0.2',
    ];

    public static function isOfficeIp(): bool{
        return in_array(static::ip(), self::$officeIps);
    }
    public static function ip()
    {
        return request()->header('CF_CONNECTING_IP')
            ? request()->header('CF_CONNECTING_IP')
            : request()->ip();
    }
}
