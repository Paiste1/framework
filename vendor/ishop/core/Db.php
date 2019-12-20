<?php


namespace ishop;


class Db
{
    use TSingleton;

    protected function __construct()
    {
        $db = require_once CONFIG . '/config_db.php';
    }

}