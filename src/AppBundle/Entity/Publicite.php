<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicite
 *
 * @ORM\Table(name="publicite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PubliciteRepository")
 */
class Publicite
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
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startTime", type="datetime")
     */
    private $startTime;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Produit",inversedBy="publicites" )
   */
    protected $produit;

    /**
     * @var string
     *
     * @ORM\Column(name="plateforme", type="string", length=255,nullable=true)
     */
    private $plateforme;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255,nullable=true)
     */
    private $pays;
    /**
     * @var int
     *
     * @ORM\Column(name="budget", type="integer",nullable=true)
     */
    private $budget;

        /**
     * @var int
     *
     * @ORM\Column(name="couverture", type="integer",nullable=true)
     */
    private $couverture;
    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255,nullable=true)
     */
    private $ville;

        /**
     * @var string
     *
     * @ORM\Column(name="sexe_age", type="string", length=255,nullable=true)
     */
    private $sexeAge;
    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\PayementProcess", cascade={"persist"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $payementProcess;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255,nullable=true)
     */
    private $status;

        public function __construct()
    {

         $this->status='created';
         $this->plateforme='facebook';
         $this->payementProcess=null;
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Publicite
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set startTime
     *
     * @param \DateTime $startTime
     * @return Publicite
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Get startTime
     *
     * @return \DateTime 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set duree
     *
     * @param string $duree
     * @return Publicite
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set plateforme
     *
     * @param string $plateforme
     * @return Publicite
     */
    public function setPlateforme($plateforme)
    {
        $this->plateforme = $plateforme;

        return $this;
    }

    /**
     * Get plateforme
     *
     * @return string 
     */
    public function getPlateforme()
    {
        return $this->plateforme;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Publicite
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
     * Set ville
     *
     * @param string $ville
     * @return Publicite
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Publicite
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return Publicite
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Publicite
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
     * Set produit
     *
     * @param \AppBundle\Entity\Produit $produit
     * @return Publicite
     */
    public function setProduit(\AppBundle\Entity\Produit $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \AppBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

            /**
     * Set sexe
     *
     * @param string $sexe
     * @return Publicite
     */
    public function setSexeAge($sexe)
    {
        $this->sexeAge = $sexe;

        return $this;
    }
    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexeAge()
    {
        return $this->sexeAge;
    }

    /**
     * Set budget
     *
     * @param integer $budget
     * @return Publicite
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
     * Set couverture
     *
     * @param integer $couverture
     * @return Publicite
     */
    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;

        return $this;
    }

    /**
     * Get couverture
     *
     * @return integer 
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * Set payementProcess
     *
     * @param \AppBundle\Entity\PayementProcess $payementProcess
     * @return Publicite
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
