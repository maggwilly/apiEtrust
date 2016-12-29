<?php

namespace AppBundle\Entity;
use AppBundle\Form\PayementType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Payement
 *
 * @ORM\Table(name="payement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PayementRepository")
 */
class Payement implements InfoInterface
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
     * @ORM\Column(name="orangeMoney", type="string", length=255, nullable=true)
     */
    private $orangeMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="mtnMoney", type="string", length=255, nullable=true)
     */
    private $mtnMoney;

    /**
     * @var string
     *
     * @ORM\Column(name="payementLivraison", type="boolean")
     */
    private $payementLivraison=true;
    /**
     * @var string
     *
     * @ORM\Column(name="moneyTransfert",  type="boolean")
     */
    private $moneyTransfert=true;
    /**
     * @var bool
     *
     * @ORM\Column(name="defined", type="boolean",nullable=true)
     */
    private $defined=false;
   /**
     * @var string
     *
     * @ORM\Column(name="mobileTransfert",  type="boolean")
     */
    private $mobileTransfert=true;
        /**
     * @var string
     *
     * @ORM\Column(name="apresReception",  type="string")
     */
    private $apresReception=true;

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
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set orangeMoney
     * @param string $orangeMoney
     * @return Payement
     */
    public function setOrangeMoney($orangeMoney)
    {
        $this->orangeMoney = $orangeMoney;
        return $this;
    }

    /**
     * Get orangeMoney
     * @return string 
     */
    public function getOrangeMoney()
    {
        return $this->orangeMoney;
    }

    /**
     * Set mtnMoney
     * @param string $mtnMoney
     * @return Payement
     */
    public function setMtnMoney($mtnMoney)
    {
        $this->mtnMoney = $mtnMoney;
        return $this;
    }

    /**
     * Get mtnMoney
     *
     * @return string 
     */
    public function getMtnMoney()
    {
        return $this->mtnMoney;
    }

    /**
     * Set moneyTransfert
     *
     * @param string $moneyTransfert
     * @return Payement
     */
    public function setMoneyTransfert($moneyTransfert)
    {
        $this->moneyTransfert = $moneyTransfert;

        return $this;
    }

    /**
     * Get moneyTransfert
     *
     * @return string 
     */
    public function getMoneyTransfert()
    {
        return $this->moneyTransfert;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Payement
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
     * @return Payement
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
        return PayementType::class;
    }

    /**
     * Set payementLivraison
     *
     * @param boolean $payementLivraison
     * @return Payement
     */
    public function setPayementLivraison($payementLivraison)
    {
        $this->payementLivraison = $payementLivraison;

        return $this;
    }

    /**
     * Get payementLivraison
     *
     * @return boolean 
     */
    public function getPayementLivraison()
    {
        return $this->payementLivraison;
    }

    /**
     * Set apresReception
     *
     * @param string $apresReception
     * @return Payement
     */
    public function setApresReception($apresReception)
    {
        $this->apresReception = $apresReception;

        return $this;
    }

    /**
     * Get apresReception
     *
     * @return string 
     */
    public function getApresReception()
    {
        return $this->apresReception;
    }

    /**
     * Set fournie
     *
     * @param boolean $fournie
     * @return Payement
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
     * @return Payement
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
     * Set mobileTransfert
     *
     * @param boolean $mobileTransfert
     * @return Payement
     */
    public function setMobileTransfert($mobileTransfert)
    {
        $this->mobileTransfert = $mobileTransfert;

        return $this;
    }

    /**
     * Get mobileTransfert
     *
     * @return boolean 
     */
    public function getMobileTransfert()
    {
        return $this->mobileTransfert;
    }

    /**
     * Set verificationRequestedAt
     *
     * @param \DateTime $verificationRequestedAt
     * @return Payement
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
     * @return Payement
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
