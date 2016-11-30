<?php

namespace Core;

/**
 * Created by PhpStorm.
 * User: aston
 * Date: 29/11/16
 * Time: 11:21
 */
class Database
{
    private static $class;

//    public static $maVariable = "BiBi";

//    public function __construct($class)
//    {
//        $this->class = $class;
//    }

    private static $connection = null;

    public static function getConnection($class)
    {
//      recupére notre class
//        $this->class = $class;
//        =>
//       Creation d'un singleton
        self::$class = $class;

//      Si connexion est null ?

        if (is_null(self::$connection)) {
            self::$connection = new self::$class("mysql:host=localhost;dbname=aston", "root", "paris");
//            print 'Singleton appelé';
        }

        return self::$connection ;
    }

//$db = new PDO("mysql:host=localhost;dbname=aston", "root", "paris");

}