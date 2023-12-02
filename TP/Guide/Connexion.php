<?php


class Connexion
{
    protected const DBHOST = "localhost";
    protected const DBUSER = "root";
    protected const DBPASS = "root";
    protected const DBNAME = "guide";

    protected $dsn;

    public function __construct()
    {
        $this->dsn = "mysql:dbname=" . self::DBNAME . ";host=" . self::DBHOST;
    }

    public function connectDB()
    {
        try {
            $pdo = new PDO($this->dsn, self::DBUSER, self::DBPASS);
            echo "Connecté avec succès !";
            
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

$connexion = new Connexion();
$connexion->connectDB();
