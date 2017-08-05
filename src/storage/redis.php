<?php
/**
 * Created by PhpStorm.
 * User: Blaine
 * Date: 7/21/2017
 * Time: 7:48 PM
 */
namespace storage;

//database function
function connectToRedis($host, $port)
{
    $redis = new Redis();
    $redis->connect($host, $port);
    return $redis;
}
