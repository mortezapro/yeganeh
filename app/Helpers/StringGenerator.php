<?php

namespace App\Helpers;

class StringGenerator{
    protected static $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    public static function make(int $length):string
    {
        $randomstring = "";
        for ($i = 0; $i < $length; $i++) {
            $randomstring .= self::$chars[rand(0, strlen(self::$chars)-1)];
        }
        return $randomstring;
    }
}
