<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lon", type="decimal", precision=10, scale=5, nullable=true)
     */
    private $lon;

        /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;


        /**
     * @var string
     *
     * @ORM\Column(name="description_lieu", type="string", length=255, nullable=true)
     */
    private $descriptionLieu;
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Event")
   * @ORM\JoinColumn(nullable=true)
   */
    private $event;
    /**
   * @ORM\OneToMany(targetEntity="AppBundle\Entity\Publicite", mappedBy="produit" , cascade={"persist","remove"})
   */
    protected $publicites;
    /**
     * @var string
     *
     * @ORM\Column(name="type_annonce", type="string", length=255,nullable=true)
     */
    private $typeAnnonce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="utilDate", type="date", nullable=true)
     */
     private $utilDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="utilTime", type="date", nullable=true)
     */
     private $utilTime;
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255,nullable=true)
     */
    private $description;

        /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255,nullable=true)
     */
    private $message;

    /**
     * @var string
     * @ORM\Column(name="fr_nom", type="string", length=255, nullable=true)
     */
    private $frNom;

    /**
     * @var string
     *
     * @ORM\Column(name="en_nom", type="string", length=255, nullable=true)
     */
    private $enNom;
    /**
     * @var string
     *
     * @ORM\Column(name="prixDiscutable",  type="boolean",nullable=true)
     */
    private $prixDiscutable=true;

    /**
     * @var string
     *
     * @ORM\Column(name="stockLimite",  type="boolean",nullable=true)
     */
    private $stockLimite=true;
    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer",nullable=true)
     */
    private $prix;

  

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
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist", "remove"},orphanRemoval=true)
    @ORM\JoinColumn(nullable=true)
   */
    private $image;
  
    private $imageFile;
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->uniqueid=uniqid();
        $this->createdAt=new \DateTime();
        $this->publicites= new \Doctrine\Common\Collections\ArrayCollection();

    }

  public function setImageFile($file)
  {
    $this->imageFile = $file;
    if (null === $this->imageFile) {
      return;
    }
    $this->setImage(new Image($this->imageFile,$this->nom ));
  }

  public function getImageFile()
  {
    return $this->imageFile;
  }

  public function setImage(\AppBundle\Entity\Image $image = null)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
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
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescriptionLieu($description)
    {
        $this->descriptionLieu = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescriptionLieu()
    {
        return $this->descriptionLieu;
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
    public function setCategorie($categorie = null)
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

        /**
     * Set frNom
     *
     * @param string $frNom
     * @return Categorie
     */
    public function setFrNom($frNom)
    {
        $this->frNom = $frNom;

        return $this;
    }

    /**
     * Get frNom
     *
     * @return string 
     */
    public function getFrNom()
    {
        return $this->frNom;
    }

    /**
     * Set enNom
     *
     * @param string $enNom
     * @return Categorie
     */
    public function setEnNom($enNom)
    {
        $this->enNom = $enNom;

        return $this;
    }

    /**
     * Get enNom
     *
     * @return string 
     */
    public function getEnNom()
    {
        return $this->enNom;
    }

    /**
     * Set typeAnnonce
     *
     * @param string $typeAnnonce
     * @return Produit
     */
    public function setTypeAnnonce($typeAnnonce)
    {
        $this->typeAnnonce = $typeAnnonce;

        return $this;
    }

    /**
     * Get typeAnnonce
     *
     * @return string 
     */
    public function getTypeAnnonce()
    {
        return $this->typeAnnonce;
    }

    /**
     * Set utilDate
     *
     * @param \DateTime $utilDate
     * @return Produit
     */
    public function setUtilDate($utilDate)
    {
        $this->utilDate = $utilDate;

        return $this;
    }

    /**
     * Get utilDate
     *
     * @return \DateTime 
     */
    public function getUtilDate()
    {
        return $this->utilDate;
    }

 /**
     * Set utilDate
     *
     * @param \DateTime $utilDate
     * @return Produit
     */
    public function setUtilTime($utilDate)
    {
        $this->utilTime = $utilDate;

        return $this;
    }

    /**
     * Get utilDate
     *
     * @return \DateTime 
     */
    public function getUtilTime()
    {
        return $this->utilTime;
    }
    /**
     * Set message
     *
     * @param string $message
     * @return Produit
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set stockLimite
     *
     * @param boolean $stockLimite
     * @return Produit
     */
    public function setStockLimite($stockLimite)
    {
        $this->stockLimite = $stockLimite;

        return $this;
    }

    /**
     * Get stockLimite
     *
     * @return boolean 
     */
    public function getStockLimite()
    {
        return $this->stockLimite;
    }

    /**
     * Set event
     *
     * @param \AppBundle\Entity\Event $event
     * @return Produit
     */
    public function setEvent(\AppBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AppBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Add publicites
     *
     * @param \AppBundle\Entity\Publicite $publicites
     * @return Produit
     */
    public function addPublicite(\AppBundle\Entity\Publicite $publicites)
    {
        $this->publicites[] = $publicites;

        return $this;
    }

    /**
     * Remove publicites
     *
     * @param \AppBundle\Entity\Publicite $publicites
     */
    public function removePublicite(\AppBundle\Entity\Publicite $publicites)
    {
        $this->publicites->removeElement($publicites);
    }

    /**
     * Get publicites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPublicites()
    {
        return $this->publicites;
    }

     /**
     * Set lat
     *
     * @param string $lat
     * @return Localisation
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param string $lon
     * @return Localisation
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Localisation
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }


    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }
}
