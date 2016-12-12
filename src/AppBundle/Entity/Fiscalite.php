<?php

namespace AppBundle\Entity;
use AppBundle\Form\FiscaliteType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Fiscalite
 *
 * @ORM\Table(name="fiscalite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FiscaliteRepository")
 */
class Fiscalite implements InfoInterface
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
     * @ORM\Column(name="nomJuridique", type="string", length=255, nullable=true)
     */
    private $nomJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="registre", type="string", length=255, nullable=true)
     */
    private $registre;

    /**
     * @var string
     *
     * @ORM\Column(name="contribuable", type="string", length=255, nullable=true)
     */
    private $contribuable;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie='Sarl';

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=255, nullable=true)
     */
    private $regime;

    /**
     * @var bool
     *
     * @ORM\Column(name="conforme", type="boolean", nullable=true)
     */
    private $conforme=true;

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
     * Set nomJuridique
     *
     * @param string $nomJuridique
     * @return Fiscalite
     */
    public function setNomJuridique($nomJuridique)
    {
        $this->nomJuridique = $nomJuridique;

        return $this;
    }

    /**
     * Get nomJuridique
     *
     * @return string 
     */
    public function getNomJuridique()
    {
        return $this->nomJuridique;
    }

    /**
     * Set registre
     *
     * @param string $registre
     * @return Fiscalite
     */
    public function setRegistre($registre)
    {
        $this->registre = $registre;

        return $this;
    }

    /**
     * Get registre
     *
     * @return string 
     */
    public function getRegistre()
    {
        return $this->registre;
    }

    /**
     * Set contribuable
     *
     * @param string $contribuable
     * @return Fiscalite
     */
    public function setContribuable($contribuable)
    {
        $this->contribuable = $contribuable;

        return $this;
    }

    /**
     * Get contribuable
     *
     * @return string 
     */
    public function getContribuable()
    {
        return $this->contribuable;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Fiscalite
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set regime
     *
     * @param string $regime
     * @return Fiscalite
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return string 
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set conforme
     *
     * @param boolean $conforme
     * @return Fiscalite
     */
    public function setConforme($conforme)
    {
        $this->conforme = $conforme;

        return $this;
    }

    /**
     * Get conforme
     *
     * @return boolean 
     */
    public function getConforme()
    {
        return $this->conforme;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Fiscalite
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
     * @return Fiscalite
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
        return FiscaliteType::class;
    }
}
