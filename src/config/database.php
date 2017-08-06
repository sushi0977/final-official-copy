<?php
/**
 * Created by PhpStorm.
 * User: Blaine
 * Date: 8/6/2017
 * Time: 11:51 AM
 */
return array(
    'fetch' => PDO::FETCH_ASSOC,
    'default' => 'mysql',
    'connections' => array (
        'mysql' => array(
            'driver' => 'mysql',
            'host'  => 'localhost',
            'database' => 'cs3620',
            'port' => 3306,
            'username' => 'foo',
            'password' => 'bar',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ),
        'redis' => array (
            'cluster' => 'false',
            'default' =>  array(
                'host' => 'localhost',
                'port' => 6379,
                'database' => 0
            )
        )
    )

);
