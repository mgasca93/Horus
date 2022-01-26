<?php

namespace Horus\Config;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Env
{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'host';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'db_name';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'db_user';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'db_passwd';

     /**
     * Database driver
     * @var string
     */
    const DB_DRIVER = 'mysql';

     /**
     * Database driver
     * @var string
     */
    const DB_CHARSET = 'utf8mb4';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
}
