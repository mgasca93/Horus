<?php

namespace Horus\Core;

use PDO;
use Horus\Config\Env;

/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model
{

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $dsn = 'mysql:host=' . Env::DB_HOST . ';dbname=' . Env::DB_NAME . ';charset=utf8';
            $db = new PDO($dsn, Env::DB_USER, Env::DB_PASSWORD);
            
            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }
}
