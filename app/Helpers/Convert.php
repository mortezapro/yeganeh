<?php

namespace App\Helpers;

class Convert{

    public static function priceFormat(string $price)
    {
        $price =self::removePersianChar($price);
        return str_replace(",","",$price);
    }

    public static function removePersianChar(string $text)
    {
        return preg_replace('#[^a-zA-Z0-9./]#', '', $text);
    }
}
