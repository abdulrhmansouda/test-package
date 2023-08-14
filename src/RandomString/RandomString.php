<?php

namespace RandomString;

class RandomString
{
    public static function generateRandomString($length = 10, $charset = '0123456789abcdefghijklmnopqrstuvwxyz-_')
    {
        $randomString = 'abd';
        $charsetLength = strlen($charset);

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $charset[rand(0, $charsetLength - 1)];
        }

        return $randomString;
    }
}
