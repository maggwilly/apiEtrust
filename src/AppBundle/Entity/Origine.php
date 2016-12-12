<?php

namespace AppBundle\Entity;
use AppBundle\Form\OrigineType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Origine
 *
 * @ORM\Table(name="origine")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrigineRepository")
 */
class Origine implements InfoInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="origine", type="string", length=255, nullable=true)
     */
    private $origine;

    /**
     * @var string
     *
     * @ORM\Column(name="provenace", type="string", length=255, nullable=true)
     */
    private $provenance;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite", type="string", length=255, nullable=true)
     */
    private $qualite;

    /**
     * @var string
     *
     * @ORM\Column(name="typeVente", type="string", length=255, nullable=true)
     */
    private $typeVente;

    /**
     * @var bool
     *
     * @ORM\Column(name="grossiste", type="boolean", nullable=true)
     */
    private $grossiste=true;

    /**
     * @var bool
     *
     * @ORM\Column(name="details", type="boolean", nullable=true)
     */
    private $details=true;

    /**
     * @var boolean
     *
     * @ORM\Column(name="garenti", type="boolean", nullable=true)
     */
    private $garenti=false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sur_commande", type="boolean", nullable=true)
     */
    private $surCommande;

    /**
     * @var bool
     *
     * @ORM\Column(name="virified", type="boolean",nullable=true)
     */
    private $virified=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="virified_at", type="datetime", nullable=true)
     */
    private $virifiedAt;


    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set provenace
     *
     * @param string $provenace
     * @return Origine
     */
    public function setProvenance($provenace)
    {
        $this->provenance = $provenace;

        return $this;
    }

    /**
     * Get provenace
     *
     * @return string 
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * Set qualite
     *
     * @param string $qualite
     * @return Origine
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return string 
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set typeVente
     *
     * @param string $typeVente
     * @return Origine
     */
    public function setTypeVente($typeVente)
    {
        $this->typeVente = $typeVente;

        return $this;
    }

    /**
     * Get typeVente
     *
     * @return string 
     */
    public function getTypeVente()
    {
        return $this->typeVente;
    }

    /**
     * Set grossiste
     *
     * @param boolean $grossiste
     * @return Origine
     */
    public function setGrossiste($grossiste)
    {
        $this->grossiste = $grossiste;

        return $this;
    }

    /**
     * Get grossiste
     *
     * @return boolean 
     */
    public function getGrossiste()
    {
        return $this->grossiste;
    }

    /**
     * Set details
     *
     * @param boolean $details
     * @return Origine
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return boolean 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set garenti
     *
     * @param string $garenti
     * @return Origine
     */
    public function setGarenti($garenti)
    {
        $this->garenti = $garenti;

        return $this;
    }

    /**
     * Get garenti
     *
     * @return string 
     */
    public function getGarenti()
    {
        return $this->garenti;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Origine
     */
    public function setVirified($virified)
    {
        $this->virified = $virified;

        return $this;
    }

    /**
     * Get virified
     *
     * @return boolean 
     */
    public function getVirified()
    {
        return $this->virified;
    }

    /**
     * Set virifiedAt
     *
     * @param \DateTime $virifiedAt
     * @return Origine
     */
    public function setVirifiedAt($virifiedAt)
    {
        $this->virifiedAt = $virifiedAt;

        return $this;
    }

    /**
     * Get virifiedAt
     *
     * @return \DateTime 
     */
    public function getVirifiedAt()
    {
        return $this->virifiedAt;
    }

          /**
     * Get virifiedAt
     *
     * @return class 
     */
    public function getClassType()
    {
        return OrigineType::class;
    }

    /**
     * Set origine
     *
     * @param string $origine
     * @return Origine
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return string 
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set surCommande
     *
     * @param boolean $surCommande
     * @return Origine
     */
    public function setSurCommande($surCommande)
    {
        $this->surCommande = $surCommande;

        return $this;
    }

    /**
     * Get surCommande
     *
     * @return boolean 
     */
    public function getSurCommande()
    {
        return $this->surCommande;
    }
}
