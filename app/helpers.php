<?php
if (! function_exists('humanDateRead')) {
    function humanDateRead($date) {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
    }
}
