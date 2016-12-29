<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * @ORM\Table(name="account",uniqueConstraints={@ORM\UniqueConstraint(name="users_telephone_unique", columns={"telephone"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *@ORM\HasLifecycleCallbacks()
 */
class User implements UserInterface
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(name="uniqueid", type="string", length=255)
     */
    private $uniqueid;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

        /**
     * @ORM\Column(type="string", length=700, nullable=true)
     */
    protected $langue;


   /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;
  
     /**
     * @ORM\Column(type="string", length=700)
     */
    protected $password;

    protected $plainPassword;

    /**
     * @var boolean
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled;
    private $accountNonExpired;
    private $credentialsNonExpired;
    private $accountNonLocked;

   /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Fiscalite", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $fiscalite;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Localisation", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $localisation;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Representation", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $representation;
    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Contact", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $contact;

    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Origine", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $origine;
 /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Request", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $requestForVerification;


    /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Livraison", cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $livraison;

      /**
   * @ORM\OneToMany(targetEntity="AppBundle\Entity\Element", mappedBy="user" ,cascade={"persist","remove"})
   * @ORM\JoinColumn(nullable=true)
   */
    protected $elements;

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
     * @var bool
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="virified", type="boolean")
     */
    private $virified=false;
    /**
     * @var bool
     *
     * @ORM\Column(name="virified_at", type="datetime", nullable=true)
     */
    private $virifiedAt;
  /**
   * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist", "remove"} ,orphanRemoval=true)
    @ORM\JoinColumn(nullable=true)
   */
    private $image;
  
    private $imageFile;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array")
     */
    private $roles;

    public function __construct(
     $username=null,
     $password=null, array $roles = array(), 
     $enabled = true, 
     $userNonExpired = true,
     $credentialsNonExpired = true,
     $userNonLocked = true
       )
    {
        $this->telephone = $username;
        $this->password = $password;
        $this->enabled = $enabled;
        $this->accountNonExpired = $userNonExpired;
        $this->credentialsNonExpired = $credentialsNonExpired;
        $this->accountNonLocked = $userNonLocked;
        $this->roles = $roles;
        $this->uniqueid=uniqid();
        $this->createdAt=new \DateTime();

    }

    
  public function setImageFile($file)
  {
    $this->imageFile = $file;
    if (null === $this->imageFile) {
      return;
    }
    $this->setImage(new Image($this->imageFile,$this->nom));
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
   $this->origine=new Origine();
   $this->fiscalite=new Fiscalite();
   $this->representation=new Representation($this->telephone,$this->email,$this->nom);
   $this->contact=new Contact($this->telephone,$this->email);
   $this->localisation=new Localisation();
   $this->livraison=new Livraison();
   $this->payement=new Payement();
   $this->retour=new Retour();
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
     *
     * @return User
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        $this->username = $telephone;
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

   

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
         return $this;
    }

    public function getPassword()
    {
        return $this->password;

    }

    public function setPassword($password)
    {
        $this->password = $password;
         return $this;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles=array())
    {
        $this->roles = $roles;

        return $this;
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->telephone;
    }

    public function eraseCredentials()
    {
        // Suppression des données sensibles
        $this->plainPassword = null;
    }

 
    public function isAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

  
    public function isAccountNonLocked()
    {
        return $this->accountNonLocked;
    }


    public function isCredentialsNonExpired()
    {
        return $this->credentialsNonExpired;
    }


    public function isEnabled()
    {
        return $this->enabled;
    }
public function setEnabled($enabled)
    {
         $this->enabled=$enabled;
        return $this;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return User
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
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

   

    /**
     * Set uniqueid
     *
     * @param string $uniqueid
     * @return User
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
     * Set fisacalite
     *
     * @param \AppBundle\Entity\Fiscalite $fisacalite
     * @return User
     */
    public function setFiscalite(\AppBundle\Entity\Fiscalite $fisacalite = null)
    {
        $this->fiscalite = $fisacalite;

        return $this;
    }

    /**
     * Get fisacalite
     *
     * @return \AppBundle\Entity\Fiscalite 
     */
    public function getFiscalite()
    {
        return $this->fiscalite;
    }

    /**
     * Set localisation
     *
     * @param \AppBundle\Entity\Localisation $localisation
     * @return User
     */
    public function setLocalisation(\AppBundle\Entity\Localisation $localisation = null)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return \AppBundle\Entity\Localisation 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set contact
     *
     * @param \AppBundle\Entity\Contact $contact
     * @return User
     */
    public function setContact(\AppBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \AppBundle\Entity\Contact 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set origine
     *
     * @param \AppBundle\Entity\Origine $origine
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
     * Set representation
     *
     * @param \AppBundle\Entity\Representation $representation
     * @return User
     */
    public function setRepresentation(\AppBundle\Entity\Representation $representation = null)
    {
        $this->representation = $representation;

        return $this;
    }

    /**
     * Get representation
     *
     * @return \AppBundle\Entity\Representation 
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return User
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
     * @return User
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
     * Set langue
     *
     * @param string $langue
     * @return User
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return string 
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * Set requestForVerification
     *
     * @param \AppBundle\Entity\Request $requestForVerification
     * @return User
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

    /**
     * Add elements
     *
     * @param \AppBundle\Entity\Element $elements
     * @return User
     */
    public function addElement(\AppBundle\Entity\Element $elements)
    {
        $this->elements[] = $elements;

        return $this;
    }

    /**
     * Remove elements
     *
     * @param \AppBundle\Entity\Element $elements
     */
    public function removeElement(\AppBundle\Entity\Element $elements)
    {
        $this->elements->removeElement($elements);
    }

    /**
     * Get elements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getElements()
    {
        return $this->elements;
    }
}
