<?php

namespace Rdisme\Tools;


class Ip
{


    /**
     * 简单获取ip地址
     */
    public static function get()
    {
        $ip = 'unknown';

        if (isset($_SERVER)) {
            $ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']);
        }

        return $ip;
    }
}
