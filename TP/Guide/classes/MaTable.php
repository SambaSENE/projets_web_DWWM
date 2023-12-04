<?php

class MaTable
{
    private int $id;
    private string $nom;
    private string $adresse;
    private float $prix;
    private string $commentaire;
    private float $note;
    private DateTime $visite;
    private string $maTable;

    public function __construct(string $_maTable)
    {
        $this->maTable = $_maTable;
    }

    public function  getData()  
    {
        $state = [];
        try {
            $connexion = Connexion::getInstance();
            $state = $connexion->prepare("SELECT * FROM " . $this->maTable);
            $state->execute();

            $data = $state->fetchAll();
        } catch (PDOException $e) {
            die("Erreur" . $e->getMessage());
        }

        return json_encode($data);
    }
    // public function finfID(int $_id) : array 
    // {
    //     try {
    //         $connexion = Connexion::getInstance();
    //         $state = $connexion->prepare(
    //             "SELECT * FROM " .$this->maTable . " WHERE" . $_id
    //         );
    
    //         $state->bindParam(':id', $_id, PDO::PARAM_INT);
    //         $state->execute();
    
    //         $resultat = $state->fetch();
    
            
    
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }

    //     return $resultat;
    // }
    
    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of adresse
     *
     * @return string
     */
    public function getAdresse(): string {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @param string $adresse
     *
     * @return self
     */
    public function setAdresse(string $adresse): self {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Get the value of prix
     *
     * @return float
     */
    public function getPrix(): float {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @param float $prix
     *
     * @return self
     */
    public function setPrix(float $prix): self {
        $this->prix = $prix;
        return $this;
    }

    /**
     * Get the value of commentaire
     *
     * @return string
     */
    public function getCommentaire(): string {
        return $this->commentaire;
    }

    /**
     * Set the value of commentaire
     *
     * @param string $commentaire
     *
     * @return self
     */
    public function setCommentaire(string $commentaire): self {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Get the value of note
     *
     * @return float
     */
    public function getNote(): float {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @param float $note
     *
     * @return self
     */
    public function setNote(float $note): self {
        $this->note = $note;
        return $this;
    }

    /**
     * Get the value of visite
     *
     * @return DateTime
     */
    public function getVisite(): DateTime {
        return $this->visite;
    }

    /**
     * Set the value of visite
     *
     * @param DateTime $visite
     *
     * @return self
     */
    public function setVisite(DateTime $visite): self {
        $this->visite = $visite;
        return $this;
    }
}
