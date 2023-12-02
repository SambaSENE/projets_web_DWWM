<?php

class Restaurant
{
    private int $id;
    private string $nom;
    private string $adresse;
    private float $prix;
    private string $commentaire;
    private float $note;
    private DateTime $visite;

    public function __construct(int $_id, string $_nom, string $_adresse, float $_prix, string $_commentaire, float $_note, DateTime $_visite)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->adresse = $_adresse;
        $this->prix = $_prix;
        $this->commentaire = $_commentaire;
        $this->note = $_note;
        $this->visite = $_visite;
    }

    public function finfID()
    {
        try {
            $connexion = new Connexion();
            $requete = $connexion->prepare(
                "SELECT * FROM restaurant WHERE id = :id"
            );
    
            $requete->bindParam(':id', $this->id, PDO::PARAM_INT);
            $requete->execute();
    
            $resultat = $requete->fetch(PDO::FETCH_ASSOC);
    
            
    
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
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
