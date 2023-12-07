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
    public function insertElement(string $nom, string $adresse,  float $prix,  string $commentaire, int $note,  string $visite): void
    {
       
        
        try {
            $connexion = Connexion::getInstance();

            // $rq = "INSERT INTO " . $this->maTable ." VALUES  ( id , ?,?,?,?,?,?)) ";
            $rq = "INSERT INTO " . $this->maTable . " VALUES ( id, ?, ?, ?, ?, ?,?)";
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
    public function deleteElement($id) : void
    {
        try {
            $connexion = Connexion::getInstance();
            
            $rq = "DELETE FROM " . $this->maTable . " WHERE id= :id";
            $state = $connexion->prepare($rq);
            $state->bindParam("id" , $id);
            $state->execute();

        } catch (PDOException $e) {
            die('Erreur ' . $e->getMessage());
        }


    }
    // public function  createElement() : array
    // {

    // }

    /**
     * Set the value of maTable
     *
     * @param string $maTable
     *
     * @return self
     */
    public function setMaTable(string $maTable): self {
        $this->maTable = $maTable;
        return $this;
    }

    /**
     * Get the value of maTable
     *
     * @return string
     */
    public function getMaTable(): string {
        return $this->maTable;
    }
}
