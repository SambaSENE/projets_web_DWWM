<?php

require "Connexion.php";

class MaTable
{

    private string $maTable;

    public function __construct(string $_maTable)
    {
        $this->maTable = $_maTable;
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function findElement(): array
    {
        $element = [];
        try {
            $connexion =  Connexion::getInstance();
            $state = $connexion->prepare("SELECT * FROM " . $this->maTable);
            $state->execute();

            $element = $state->fetchAll();
        } catch (PDOException  $e) {
            die("Erreur" . $e->getMessage());
        }

        return $element;
    }
    public function insertElement(string $nom, string $adresse,  int $prix,  string $commentaire, int $note, string $visite): void
    {
        var_dump($prix);
        try {
            $connexion = Connexion::getInstance();

            $rq = "INSERT INTO " . $this->maTable." VALUES  (id , ?,?,?,?,?,?) ";
            echo $rq;
            $state = $connexion->prepare($rq);
            $state->execute(
                [
                    $nom, $adresse, $prix, $commentaire, $note, $visite 
                ]
            );
           
        } catch (PDOException $e) {
            die("Echec d'insertion" . $e->getMessage());
        }
    }

    // public function  createElement() : array
    // {

    // }
}
