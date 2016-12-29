<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PayementProcess
 *
 * @ORM\Table(name="payement_process")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PayementProcessRepository")
 */
class PayementProcess
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
     * @ORM\Column(name="mode", type="string", length=255)
     */
    private $mode;

    /**
     * @var string
     *
     * @ORM\Column(name="orangeMobileTel", type="string", length=255)
     */
    private $orangeMobileTel;

    /**
     * @var string
     *
     * @ORM\Column(name="confirMsgReceived", type="string", length=255)
     */
    private $confirMsgReceived;

    /**
     * @var string
     *
     * @ORM\Column(name="transactionId", type="string", length=255)
     */
    private $transactionId;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="string", length=255)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=255)
     */
    private $devise;

    /**
     * @var bool
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;


      public function __construct()
    {
         $this->createdAt=new \DateTime();
           $this->status='created';
    }

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
     * Set mode
     *
     * @param string $mode
     * @return PayementProcess
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string 
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set orangeMobileTel
     *
     * @param string $orangeMobileTel
     * @return PayementProcess
     */
    public function setOrangeMobileTel($orangeMobileTel)
    {
        $this->orangeMobileTel = $orangeMobileTel;

        return $this;
    }

    /**
     * Get orangeMobileTel
     *
     * @return string 
     */
    public function getOrangeMobileTel()
    {
        return $this->orangeMobileTel;
    }

    /**
     * Set confirMsgReceived
     *
     * @param string $confirMsgReceived
     * @return PayementProcess
     */
    public function setConfirMsgReceived($confirMsgReceived)
    {
        $this->confirMsgReceived = $confirMsgReceived;

        return $this;
    }

    /**
     * Get confirMsgReceived
     *
     * @return string 
     */
    public function getConfirMsgReceived()
    {
        return $this->confirMsgReceived;
    }

    /**
     * Set transactionId
     *
     * @param string $transactionId
     * @return PayementProcess
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

    /**
     * Get transactionId
     *
     * @return string 
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return PayementProcess
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PayementProcess
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return PayementProcess
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set ceatedAt
     *
     * @param \DateTime $ceatedAt
     * @return User
     */
    public function setCreatedAt($ceatedAt)
    {
        $this->ceatedAt = $ceatedAt;

        return $this;
    }

     /**
     * Get ceatedAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->ceatedAt;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return PayementProcess
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string 
     */
    public function getDevise()
    {
        return $this->devise;
    }
}
