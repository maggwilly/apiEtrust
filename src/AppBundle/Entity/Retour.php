<?php

namespace AppBundle\Entity;
use AppBundle\Form\RetourType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Retour
 *
 * @ORM\Table(name="retour")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RetourRepository")
 */
class Retour implements InfoInterface
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="support", type="string", length=255, nullable=true))
     */
    private $support='vendeur';

    /**
     * @var bool
     * @ORM\Column(name="remboursement", type="boolean",nullable=true))
     */
    private $remboursement;

    /**
     * @var string
     * @ORM\Column(name="moyens", type="string", length=255,nullable=true)
     */
    private $moyens;

    /**
     * @var int
     *
     * @ORM\Column(name="delais", type="integer")
     */
    private $delais=10;
     /**
     * @var bool
     *
     * @ORM\Column(name="fournie", type="boolean", nullable=true)
     */
    private $fournie=false;
    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="string", length=255,nullable=true)
     */
    private $conditions;

        /**
     * @var string
     *
     * @ORM\Column(name="litige", type="string", length=255,nullable=true)
     */
    private $gestionLitige;



    /**
     * @var bool
     *
     * @ORM\Column(name="defined", type="boolean",nullable=true)
     */
    private $defined=false;


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
     * Set support
     *
     * @param string $support
     * @return Retour
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
     * Set remboursement
     *
     * @param boolean $remboursement
     * @return Retour
     */
    public function setRemboursement($remboursement)
    {
        $this->remboursement = $remboursement;

        return $this;
    }

    /**
     * Get remboursement
     *
     * @return boolean 
     */
    public function getRemboursement()
    {
        return $this->remboursement;
    }

    /**
     * Set moyens
     *
     * @param string $moyens
     * @return Retour
     */
    public function setMoyens($moyens)
    {
        $this->moyens = $moyens;

        return $this;
    }

    /**
     * Get moyens
     *
     * @return string 
     */
    public function getMoyens()
    {
        return $this->moyens;
    }

    /**
     * Set delais
     *
     * @param integer $delais
     * @return Retour
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
     * Set conditions
     *
     * @param string $conditions
     * @return Retour
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }



          /**
     * Get virifiedAt
     *
     * @return class 
     */
    public function getClassType()
    {
        return RetourType::class;
    }

    /**
     * Set fournie
     *
     * @param boolean $fournie
     * @return Retour
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
     * Set gestionLitige
     *
     * @param string $gestionLitige
     * @return Retour
     */
    public function setGestionLitige($gestionLitige)
    {
        $this->gestionLitige = $gestionLitige;

        return $this;
    }

    /**
     * Get gestionLitige
     *
     * @return string 
     */
    public function getGestionLitige()
    {
        return $this->gestionLitige;
    }

    /**
     * Set defined
     *
     * @param boolean $defined
     * @return Retour
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
     * @return Retour
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
     * @return Retour
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
