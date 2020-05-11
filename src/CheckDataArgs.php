<?php

namespace Rdisme\Tools;

class CheckDataArgs
{

    /**
     * 对data数组初始化
     */
    public static function init($data, $args)
    {
        $arr = array();
        foreach ($args as $key) {
            $arr[$key] = isset($data[$key]) ? $data[$key] : null;
        }
        return $arr;
    }


    /**
     * 检测data数组中，指定的键（args）是否为空
     * @param data array
     * @param args array
     * @return 有空值返回false，无空值返回重组的数组
     */
    public static function hasNull($data, $args)
    {
        $arr = array();
        foreach ($args as $key) {
            $val = isset($data[$key]) ? $data[$key] : null;
            if (empty($val)) {
                return false;
            }
            $arr[$key] = $val;
        }
        return $arr;
    }
}
