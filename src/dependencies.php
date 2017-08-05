<?php

$dic = $app->getContainer();
$conf = new Settings();

$dic['mysql'] = function ($dic) use ($conf) {
    $c = $conf->getConf();
    $pdo = \storage\connectToMysql($c['mysql']['dsn'], $c['mysql']['username'], $c['mysql']['pass']);
    return $pdo;
};

$dic['redis'] = function ($dic) use ($conf) {
    $c = $conf->getConf();
    $redis = \storage\connectToRedis($c['redis']['host'], $c['redis']['port']);
    return $redis;
};
