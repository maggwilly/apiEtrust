<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategorieRepository")
 */
class Categorie
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
     * Get id
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     * @param string $nom
     * @return Categorie
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
}
