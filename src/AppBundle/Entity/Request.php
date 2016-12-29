<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Request
 *
 * @ORM\Table(name="request")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RequestRepository")
 */
class Request
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

        /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

        /**
     * @var \DateTime
     *
     * @ORM\Column(name="fistrequestDate", type="datetime")
     */
    private $fistrequestDate;

    /**
     * @var int
     *
     * @ORM\Column(name="budget", type="integer",nullable=true)
     */
    private $budget;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="requestDate", type="datetime")
     */
    private $requestDate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="statusChangeDate", type="datetime", nullable=true)
     */
    private $statusChangeDate;

    /**
     * @var string
     *
     * @ORM\Column(name="raison", type="string", length=255, nullable=true)
     */
    private $raison;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\PayementProcess", cascade={"persist"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $payementProcess;

 /**
     * @var \DateTime
     *
     * @ORM\Column(name="acceptedUntilDate", type="datetime", nullable=true)
     */
    private $acceptedUntilDate;
    

    public function __construct()
    {
         $this->fistrequestDate=new \DateTime();
         $this->requestDate=new \DateTime();
         $this->statusChangeDate=new \DateTime();
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
     * Set type
     *
     * @param string $type
     * @return Request
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set requestDate
     *
     * @param \DateTime $requestDate
     * @return Request
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    /**
     * Get requestDate
     *
     * @return \DateTime 
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Request
     */
    public function setStatus($status)
    {
        
        if($this->status!=$status)
             $this->statusChangeDate=new \DateTime();
          if('created'==$status)
               $this->requestDate=new \DateTime();
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
     * Set statusChangeDate
     *
     * @param \DateTime $statusChangeDate
     * @return Request
     */
    public function setStatusChangeDate($statusChangeDate)
    {
        $this->statusChangeDate = $statusChangeDate;

        return $this;
    }

    /**
     * Get statusChangeDate
     *
     * @return \DateTime 
     */
    public function getStatusChangeDate()
    {
        return $this->statusChangeDate;
    }

    /**
     * Set raison
     *
     * @param string $raison
     * @return Request
     */
    public function setRaison($raison)
    {
        $this->raison = $raison;

        return $this;
    }

    /**
     * Get raison
     *
     * @return string 
     */
    public function getRaison()
    {
        return $this->raison;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return Request
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set fistrequestDate
     *
     * @param \DateTime $fistrequestDate
     * @return Request
     */
    public function setFistrequestDate($fistrequestDate)
    {
        $this->fistrequestDate = $fistrequestDate;

        return $this;
    }

    /**
     * Get fistrequestDate
     *
     * @return \DateTime 
     */
    public function getFistrequestDate()
    {
        return $this->fistrequestDate;
    }

    /**
     * Set budget
     *
     * @param integer $budget
     * @return Request
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return integer 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set acceptedUntilDate
     *
     * @param \DateTime $acceptedUntilDate
     * @return Request
     */
    public function setAcceptedUntilDate($acceptedUntilDate)
    {
        $this->acceptedUntilDate = $acceptedUntilDate;

        return $this;
    }

    /**
     * Get acceptedUntilDate
     *
     * @return \DateTime 
     */
    public function getAcceptedUntilDate()
    {
        return $this->acceptedUntilDate;
    }

    /**
     * Set payementProcess
     *
     * @param \AppBundle\Entity\PayementProcess $payementProcess
     * @return Request
     */
    public function setPayementProcess(\AppBundle\Entity\PayementProcess $payementProcess = null)
    {
        $this->payementProcess = $payementProcess;

        return $this;
    }

    /**
     * Get payementProcess
     *
     * @return \AppBundle\Entity\PayementProcess 
     */
    public function getPayementProcess()
    {
        return $this->payementProcess;
    }
}
