<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2017/10/23 10:59
 */

namespace library\connector;

use tpr\framework\Connector;

/**
 * Class Example
 * @package library\connector
 * @example Example::name($name) ; Example::name($name)
 */
class Example extends Connector
{
    public static function __callStatic($method, $params)
    {
        self::$connect = 'mysql.example';
        return parent::__callStatic($method, $params); // TODO: Change the autogenerated stub
    }
}