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
