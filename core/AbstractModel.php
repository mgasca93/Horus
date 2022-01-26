<?php

namespace Horus\Core;

use PDO;
use Horus\Config\Env;

/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class AbstractModel
{

    private $conn;
    private static $db_user = Env::DB_USER;
    private static $db_pass = Env::DB_PASSWORD;
    private static $db_host = Env::DB_HOST;
    private static $db_driver = Env::DB_DRIVER;
    private static $db_charset = ENV::DB_CHARSET;

    protected $db_name = 'my_db';
    protected $rows = [];
    protected $query;

    abstract protected function set();
    abstract protected function get();
    abstract protected function edit();
    abstract protected function destroy();

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    private function open_connection()
    {
        $connection = self::$db_driver . ":host=" . self::$db_host . ";dbname=" . $this->db_name . ":charset=" . self::$db_charset;
        $options = [
            PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES  => FALSE
        ];
        $this->conn = new PDO($connection, self::$db_user, self::$db_pass, $options);   
    }

    /**
     * Close the PDO database connection
     * 
     * @return void
     */
    private function close_connection()
    {
        $this->conn->close();
    }

    /**
     * Execute single query for example SELECT, INSERT, UPDATE and DELETE
     * 
     * @return void
     */
    protected function execute_query()
    {
        $this->open_connection();
        $this->conn->query($this->query);
        $this->close_connection();
    }

}
