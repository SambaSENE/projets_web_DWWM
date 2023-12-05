<?php

require "Connexion.php";

class MaTable
{
    private string $nom;
    private string $adresse;
    private float $prix;
    private string $commentaire;
    private float $note;
    private string $visite;
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
    public function insertElement() : array
    {
        $element = [];

        try {
            $connexion  =  Connexion::getInstance();
            $state = $connexion->prepare("INSERT INTO " . $this->maTable. "VALUES = ?");
            $state->execute([
                
            ]);
        } catch (PDOException $e) {
            die('Erreur' . $e->getMessage());
        }
        return $element;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Get the value of adresse
     *
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Get the value of prix
     *
     * @return float
     */
    public function getPrix(): float
    {
        return $this->prix;
    }

    /**
     * Get the value of commentaire
     *
     * @return string
     */
    public function getCommentaire(): string
    {
        return $this->commentaire;
    }

    /**
     * Get the value of note
     *
     * @return float
     */
    public function getNote(): float
    {
        return $this->note;
    }

    /**
     * Get the value of visite
     *
     * @return string
     */
    public function getVisite(): string
    {
        return $this->visite;
    }
}
