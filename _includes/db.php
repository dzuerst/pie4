<?php

class PWE_DB {
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'pwe_2022';

    public static function connect()
    {
        $dsn = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME;
        $db = new PDO($dsn, self::DB_USER, self::DB_PASSWORD);
        $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

        return $db;
    }
}