<?php

namespace Rdisme\Tools;

class CheckGetArgs
{

    /**
     * @param args array
     * 指定args中的值为的键，校验这些键在get参数中是否含有空值
     * @return 有空值返回false，无空值返回重组的数组
     */
    public static function hasNull($args)
    {
        $data = array();
        foreach ($args as $key) {
            $val = isset($_GET[$key]) ? $_GET[$key] : null;
            if (empty($val)) {
                return false;
            }
            $data[$key] = $val;
        }
        return $data;
    }
}
