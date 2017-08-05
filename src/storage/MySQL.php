<?php
/**
 * Created by PhpStorm.
 * User: Blaine
 * Date: 7/21/2017
 * Time: 7:48 PM
 */

namespace storage;

function connectToMySQL($dsn, $user, $pass)
{
    $db = new PDO($dsn, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATT_MULATE_PERPARES, false);
    return $db;
}
