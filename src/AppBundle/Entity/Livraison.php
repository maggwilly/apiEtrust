<?php

namespace AppBundle\Entity;
use AppBundle\Form\LivraisonType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LivraisonRepository")
 */
class Livraison implements InfoInterface
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
     * @var bool
     *
     * @ORM\Column(name="internationnal", type="boolean")
     */
    private $internationnal=false;

    /**
     * @var int
     *
     * @ORM\Column(name="delais", type="integer", nullable=true)
     */
    private $delais=7;

    /**
     * @var string
     *
     * @ORM\Column(name="support", type="string", length=255, nullable=true)
     */
    private $support='vendeur';
    /**
     * @var bool
     *
     * @ORM\Column(name="defined", type="boolean",nullable=true)
     */
    private $defined=false;
    /**
     * @var bool
     *
     * @ORM\Column(name="expedition", type="boolean", nullable=true)
     */
    private $expedition=true;

    /**
     * @var bool
     *
     * @ORM\Column(name="domicile", type="boolean", nullable=true)
     */
    private $domicile=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="toutLePays", type="boolean", nullable=true)
     */
    private $toutLePays=true;

    /**
     * @var bool
     *
     * @ORM\Column(name="en_magazin", type="boolean", nullable=true)
     */
    private $enMagazin=true;
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
     * Set internationnal
     *
     * @param boolean $internationnal
     * @return Livraison
     */
    public function setInternationnal($internationnal)
    {
        $this->internationnal = $internationnal;

        return $this;
    }

    /**
     * Get internationnal
     *
     * @return boolean 
     */
    public function getInternationnal()
    {
        return $this->internationnal;
    }

    /**
     * Set delais
     *
     * @param integer $delais
     * @return Livraison
     */
    public function setDelais($delais)
    {
        $this->delais = $delais;

        return $this;
    }

    /**
     * Get delais
     *
     * @return integer 
     */
    public function getDelais()
    {
        return $this->delais;
    }

    /**
     * Set support
     *
     * @param string $support
     * @return Livraison
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return string 
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set moyens
     *
     * @param array $moyens
     * @return Livraison
     */
    public function setMoyens($moyens)
    {
        $this->moyens = $moyens;

        return $this;
    }

    /**
     * Get moyens
     *
     * @return array 
     */
    public function getMoyens()
    {
        return $this->moyens;
    }

    /**
     * Set domicile
     *
     * @param boolean $domicile
     * @return Livraison
     */
    public function setDomicile($domicile)
    {
        $this->domicile = $domicile;

        return $this;
    }

    /**
     * Get domicile
     *
     * @return boolean 
     */
    public function getDomicile()
    {
        return $this->domicile;
    }

    /**
     * Set expedition
     *
     * @param boolean $expedition
     * @return Livraison
     */
    public function setExpedition($expedition)
    {
        $this->expedition = $expedition;

        return $this;
    }

    /**
     * Get expedition
     *
     * @return boolean 
     */
    public function getExpedition()
    {
        return $this->expedition;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Livraison
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
     * @return Livraison
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
        return LivraisonType::class;
    }



    /**
     * Set enMagazin
     *
     * @param boolean $enMagazin
     * @return Livraison
     */
    public function setEnMagazin($enMagazin)
    {
        $this->enMagazin = $enMagazin;

        return $this;
    }

    /**
     * Get enMagazin
     *
     * @return boolean 
     */
    public function getEnMagazin()
    {
        return $this->enMagazin;
    }

    /**
     * Set toutLePays
     *
     * @param boolean $toutLePays
     * @return Livraison
     */
    public function setToutLePays($toutLePays)
    {
        $this->toutLePays = $toutLePays;

        return $this;
    }

    /**
     * Get toutLePays
     *
     * @return boolean 
     */
    public function getToutLePays()
    {
        return $this->toutLePays;
    }

    /**
     * Set fournie
     *
     * @param boolean $fournie
     * @return Livraison
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
     * Set defined
     *
     * @param boolean $defined
     * @return Livraison
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
     * Set verificationRequestedAt
     *
     * @param \DateTime $verificationRequestedAt
     * @return Livraison
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
     * @return Livraison
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
