<?php


class DB
{
    static private $db;
    private const CHARSET = 'utf8';

    private const DSN = 'mysql:host=127.0.0.1;dbname=lemonara';
    private const USER = 'root';
    private const PASSWORD = '';

    // private const DSN = 'mysql:host=127.0.0.1;dbname=id15395768_lemonara';
    // private const USER = 'id15395768_juliamarti';
    // private const PASSWORD = 'ridDg|kbet6=k=%8';


    /**
     * @return PDO
     */
    static function getConnection()
    {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(
                    self::DSN,
                    self::USER,
                    self::PASSWORD,
                    [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . self::CHARSET]
                );
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        return self::$db;
    }

    static function getStatement($sql)
    {
        return self::getConnection()->prepare($sql);
    }
}