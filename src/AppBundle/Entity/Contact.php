<?php

namespace AppBundle\Entity;
use AppBundle\Form\ContactType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact implements InfoInterface
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
     * @ORM\Column(name="telephone", type="string", length=255,nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;
    /**
     * @var bool
     *
     * @ORM\Column(name="defined", type="boolean",nullable=true)
     */
    private $defined=false;
    /**
     * @var string
     *
     * @ORM\Column(name="whatsapp", type="string", length=255,nullable=true)
     */
    private $whatsapp;

    /**
     * @var string
     * @ORM\Column(name="fecebook", type="string", length=255, nullable=true)
     */
    private $fecebook;

    /**
     * @var string
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Request", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $requestForVerification;


    public function __construct(
     $telephone=null,
     $email=null )
    {
        $this->telephone = $telephone;
        $this->email = $email;
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
     * Set telephone
     * @param string $telephone
     * @return Contact
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set whatsapp
     *
     * @param string $whatsapp
     * @return Contact
     */
    public function setWhatsapp($whatsapp)
    {
        $this->whatsapp = $whatsapp;

        return $this;
    }

    /**
     * Get whatsapp
     *
     * @return string 
     */
    public function getWhatsapp()
    {
        return $this->whatsapp;
    }

    /**
     * Set fecebook
     *
     * @param string $fecebook
     * @return Contact
     */
    public function setFecebook($fecebook)
    {
        $this->fecebook = $fecebook;

        return $this;
    }

    /**
     * Get fecebook
     *
     * @return string 
     */
    public function getFecebook()
    {
        return $this->fecebook;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Contact
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
     * @return Contact
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
        return ContactType::class;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Contact
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set defined
     *
     * @param boolean $defined
     * @return Contact
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
     * @return Contact
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
     * @return Contact
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
