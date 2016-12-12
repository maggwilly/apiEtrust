<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
  *@ORM\HasLifecycleCallbacks()
 */
class Produit 
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;



    /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie")
   * 
   */
    private $categorie;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255,nullable=true)
     */
    private $description;


    /**
     * @var string
     *
     * @ORM\Column(name="prixDiscutable",  type="boolean",nullable=true)
     */
    private $prixDiscutable=true;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="moq", type="string", length=255,nullable=true)
     */
    private $moq=1;

      /**
     * @var string
     * @ORM\Column(name="uniqueid", type="string", length=255)
     */
    private $uniqueid;
     /**
     * @var string
     *
     * @ORM\Column(name="published",  type="boolean")
     */
    private $published=true; 

      /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Origine", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $origine;


    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Livraison", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $livraison;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Payement", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $payement;

   /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Retour", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $retour;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @var User
     */
    protected $user;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->uniqueid=uniqid();
        $this->createdAt=new \DateTime();

    }


/**
* @ORM\PrePersist
*/
public function prePersist(){
   $this->origine= clone $this->user->getOrigine();
   $this->livraison=clone $this->user->getLivraison();
   $this->payement=clone $this->user->getPayement();
   $this->retour=clone $this->user->getRetour();
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
     * Set nom
     *
     * @param string $nom
     * @return Produit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set moq
     *
     * @param string $moq
     * @return Produit
     */
    public function setMoq($moq)
    {
        $this->moq = $moq;

        return $this;
    }

    /**
     * Get moq
     *
     * @return string 
     */
    public function getMoq()
    {
        return $this->moq;
    }



    /**
     * Set origine
     *
     * @param \AppBundle\Entity\Origine $origine
     * @return Produit
     */
    public function setOrigine(\AppBundle\Entity\Origine $origine = null)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return \AppBundle\Entity\Origine 
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set livraison
     *
     * @param \AppBundle\Entity\Livraison $livraison
     * @return Produit
     */
    public function setLivraison(\AppBundle\Entity\Livraison $livraison = null)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return \AppBundle\Entity\Livraison 
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set payement
     *
     * @param \AppBundle\Entity\Payement $payement
     * @return Produit
     */
    public function setPayement(\AppBundle\Entity\Payement $payement = null)
    {
        $this->payement = $payement;

        return $this;
    }

    /**
     * Get payement
     *
     * @return \AppBundle\Entity\Payement 
     */
    public function getPayement()
    {
        return $this->payement;
    }

    /**
     * Set retour
     *
     * @param \AppBundle\Entity\Retour $retour
     * @return Produit
     */
    public function setRetour(\AppBundle\Entity\Retour $retour = null)
    {
        $this->retour = $retour;

        return $this;
    }

    /**
     * Get retour
     *
     * @return \AppBundle\Entity\Retour 
     */
    public function getRetour()
    {
        return $this->retour;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Produit
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set prixDiscutable
     *
     * @param boolean $prixDiscutable
     * @return Produit
     */
    public function setPrixDiscutable($prixDiscutable)
    {
        $this->prixDiscutable = $prixDiscutable;

        return $this;
    }

    /**
     * Get prixDiscutable
     *
     * @return boolean 
     */
    public function getPrixDiscutable()
    {
        return $this->prixDiscutable;
    }

    /**
     * Set categorie
     *
     * @param \AppBundle\Entity\Categorie $categorie
     * @return Produit
     */
    public function setCategorie(\AppBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \AppBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Produit
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set uniqueid
     *
     * @param string $uniqueid
     * @return Produit
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;

        return $this;
    }

    /**
     * Get uniqueid
     *
     * @return string 
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set ceatedAt
     *
     * @param \DateTime $createdAt
     * @return Produit
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
}
