<?php

namespace AppBundle\Entity;
use AppBundle\Form\RepresentationType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Representation
 *
 * @ORM\Table(name="representation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RepresentationRepository")
 */
class Representation implements InfoInterface
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
     * @ORM\Column(name="fonction", type="string", length=255, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

        /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=255,nullable=true)
     */
    private $langue;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255,nullable=true)
     */
    private $telephone;
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255,nullable=true)
     */
    private $email;
    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="dateNaissance", type="date",nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=255, nullable=true, nullable=true)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroDoc", type="string", length=255, nullable=true)
     */
    private $numeroDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="expireDate", type="date", length=255, nullable=true)
     */
    private $expireDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="virified", type="boolean", nullable=true)
     */
    private $virified=false;

    /**
     * @var bool
     *
     * @ORM\Column(name="virified_at", type="datetime", nullable=true)
     */
    private $virifiedAt;


    public function __construct(
     $telephone=null,
     $email=null,
     $nom=null
       )
    {
        $this->telephone = $telephone;
        $this->email = $email;
        $this->nom = $nom;

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
     * @param string $nom
     * @return Representation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get nom
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     * @return Representation
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Representation
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Representation
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
     * Set adresse
     *
     * @param string $adresse
     * @return Representation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Representation
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
     * Set dateNaissance
     *
     * @param string $dateNaissance
     * @return Representation
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return string 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set document
     *
     * @param string $document
     * @return Representation
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set numeroDoc
     *
     * @param string $numeroDoc
     * @return Representation
     */
    public function setNumeroDoc($numeroDoc)
    {
        $this->numeroDoc = $numeroDoc;

        return $this;
    }

    /**
     * Get numeroDoc
     *
     * @return string 
     */
    public function getNumeroDoc()
    {
        return $this->numeroDoc;
    }

    /**
     * Set expireDate
     *
     * @param string $expireDate
     * @return Representation
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate
     *
     * @return string 
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Representation
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
     * @return Representation
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
        return RepresentationType::class;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Representation
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
     * Set langue
     *
     * @param string $langue
     * @return Representation
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
     * Set telephone
     *
     * @param string $telephone
     * @return Representation
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
     * @return Representation
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
}
