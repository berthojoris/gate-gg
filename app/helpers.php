<?php

if (! function_exists('humanDateRead')) {
    function humanDateRead($date) {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
    }
}

if (! function_exists('toStrip')) {
    function toStrip($string) {
        return ($string == '' || is_null($string) || empty($string)) ? '-' : $string;
    }
}

if (! function_exists('memberSuryanation')) {
    function memberSuryanation() {
        return [
            109, 64, 62, 32, 30, 1
        ];
    }
}
