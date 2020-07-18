<?php


namespace src\handlers;


class HandlerFunctions
{
    public static function limpaString($str)
    {
        $clear = preg_replace("/\D+/", "", $str);
        return $clear;
    }

    public static function inputCpf($param)
    {

        $pattern = '/^([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{3})([[:digit:]]{2})$/';
        $replacement = '$1.$2.$3-$4';
        $format = preg_replace($pattern, $replacement, $param);

        return $format;
    }

    public static function inputFone($param)
    {

        if (strlen($param) == 11) {
            $pattern = '/^([[:digit:]]{2})([[:digit:]]{5})([[:digit:]]{4})$/';
            $replacement = '($1)$2-$3';
            $format = preg_replace($pattern, $replacement, $param);
        } else {
            $pattern = '/^([[:digit:]]{2})([[:digit:]]{4})([[:digit:]]{4})$/';
            $replacement = '($1)$2-$3';
            $format = preg_replace($pattern, $replacement, $param);
        }

        return $format;
    }
}