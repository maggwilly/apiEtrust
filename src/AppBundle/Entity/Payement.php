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
     * @ORM\Column(name="orangeMoney",  type="boolean")
     */
    private $orangeMoney=true;

    /**
     * @var string
     *
     * @ORM\Column(name="mtnMoney", type="boolean")
     */
    private $mtnMoney=true;

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
     * @ORM\Column(name="virified", type="boolean",nullable=true)
     */
    private $virified=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="virified_at", type="datetime",nullable=true)
     */
    private $virifiedAt;
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
}
