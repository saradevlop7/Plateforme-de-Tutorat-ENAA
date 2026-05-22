<?php

class Database{

    private static ?PDO $connection = null;

    public static function connect():PDO{

        if(self::$connection === null){

            self::$connection = new PDO(
                "mysql:host=localhost;dbname=peersync",
                "root",
                ""
            );

            self::$connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        }

        return self::$connection;
    }
}