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
     * @var bool
     *
     * @ORM\Column(name="defined", type="boolean",nullable=true)
     */
    private $defined=false;
        /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

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
     * @ORM\Column(name="fournie", type="boolean", nullable=true)
     */
    private $fournie=false;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Request", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $requestForVerification;
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

    /**
     * Set defined
     *
     * @param boolean $defined
     * @return Fiscalite
     */
    public function setDefined($defined)
    {
        $this->defined = $defined;

        return $this;
    }

    /**
     * Get defined
     *
     * @return boolean 
     */
    public function getDefined()
    {
        return $this->defined;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Fiscalite
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set fournie
     *
     * @param boolean $fournie
     * @return Fiscalite
     */
    public function setFournie($fournie)
    {
        $this->fournie = $fournie;

        return $this;
    }

    /**
     * Get fournie
     *
     * @return boolean 
     */
    public function getFournie()
    {
        return $this->fournie;
    }

    /**
     * Set verificationRequestedAt
     *
     * @param \DateTime $verificationRequestedAt
     * @return Fiscalite
     */
    public function setVerificationRequestedAt($verificationRequestedAt)
    {
        $this->verificationRequestedAt = $verificationRequestedAt;

        return $this;
    }

    /**
     * Get verificationRequestedAt
     *
     * @return \DateTime 
     */
    public function getVerificationRequestedAt()
    {
        return $this->verificationRequestedAt;
    }

    /**
     * Set requestForVerification
     *
     * @param \AppBundle\Entity\Request $requestForVerification
     * @return Fiscalite
     */
    public function setRequestForVerification(\AppBundle\Entity\Request $requestForVerification = null)
    {
        $this->requestForVerification = $requestForVerification;

        return $this;
    }

    /**
     * Get requestForVerification
     *
     * @return \AppBundle\Entity\Request 
     */
    public function getRequestForVerification()
    {
        return $this->requestForVerification;
    }
}
