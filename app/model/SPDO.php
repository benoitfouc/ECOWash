<?php

namespace App\Model;

class SPDO
{
    /*
* BDD : u357762808_weco
* User : u357762808_weco
* Host : mysql.hostinger.fr
*/

    private $PDOInstance = null;

    private static $instance = null;

    const DEFAULT_SQL_USER = 'u357762808_weco';

    const DEFAULT_SQL_HOST = 'mysql.hostinger.fr';

    const DEFAULT_SQL_PASS = 'Serveur-007';

    const DEFAULT_SQL_DTB = 'u357762808_weco';

    private function __construct()
    {
        $this->PDOInstance = new \PDO('mysql:dbname='.self::DEFAULT_SQL_DTB.';host='.self::DEFAULT_SQL_HOST,self::DEFAULT_SQL_USER ,self::DEFAULT_SQL_PASS,array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new SPDO();
        }
        return self::$instance;
    }

    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function prepare($query)
    {
        return $this->PDOInstance->prepare($query);
    }

    public function lastInsertId()
    {
        return $this->PDOInstance->lastInsertId();
    }
}