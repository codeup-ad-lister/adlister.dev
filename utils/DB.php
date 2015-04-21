<?php

require_once '../bootstrap.php';

class DB
{

    public static function connect()
    {
        /**
         * Get new instance of PDO Object.
         * This exists outside of the BaseModel class in order to support migration/seeder access.
         */
        $dbc = new PDO(
                'mysql:host='.$_ENV['DB_HOST'].';
                dbname='.$_ENV['DB_NAME'],
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
                );

        // Tell PDO to throw exceptions on error
        $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbc;
    }



}
