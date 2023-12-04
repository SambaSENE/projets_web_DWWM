<?php


class Connexion 
{
    protected const DBHOST = "localhost";
    protected const DBUSER = "root";
    protected const DBPASS = "";
    protected const DBNAME = "guise";
    private static  $maConnexion=null;
 

    private function __construct()
    {
        

          
    }

    public static function getInstance():PDO 
    {  $dsn= "mysql:host=" .  self::DBHOST.";dbname=". self::DBNAME  ;
        
            if(is_null(self::$maConnexion))

        try {
            self::$maConnexion = new PDO($dsn, self::DBUSER, self::DBPASS, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC ]);
        } catch (PDOException $e) {
            echo "erreur".$e->getMessage();
        }
            return self::$maConnexion;

    }
}

