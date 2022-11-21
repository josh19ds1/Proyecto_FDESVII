<?php
require_once 'config/config.php';
class Db
{
    
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host='.constant('DB_HOST').';dbname='.constant('DB').';charset=utf8', ''.constant('DB_USER').'', ''.constant('DB_PASS').'');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}