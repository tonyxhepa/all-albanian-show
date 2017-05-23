<?php
/**
 * Created by PhpStorm.
 * User: tonyx
 * Date: 5/8/2017
 * Time: 7:13 AM
 */
function shortenText($text, $maxlength = 70, $appendix = "...")
{
    if (mb_strlen($text) <= $maxlength) {
        return $text;
    }
    $text = mb_substr($text, 0, $maxlength - mb_strlen($appendix));
    $text .= $appendix;
    return $text;
}

function truncate($text, $length) {
    $length = abs((int)$length);
    if(strlen($text) > $length) {
        $text = preg_replace("/^(.{1,$length})(\s.*|$)/s", '\\1...', $text);
    }
    return($text);
}