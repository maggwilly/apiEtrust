<?php

namespace AppBundle\Entity;
use AppBundle\Form\RetourType;
use Doctrine\ORM\Mapping as ORM;

/**
 * Retour
 *
 * @ORM\Table(name="retour")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RetourRepository")
 */
class Retour implements InfoInterface
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
     * @ORM\Column(name="support", type="string", length=255, nullable=true))
     */
    private $support='vendeur';

    /**
     * @var bool
     * @ORM\Column(name="remboursement", type="boolean",nullable=true))
     */
    private $remboursement;

    /**
     * @var string
     * @ORM\Column(name="moyens", type="string", length=255,nullable=true)
     */
    private $moyens;

    /**
     * @var int
     *
     * @ORM\Column(name="delais", type="integer")
     */
    private $delais=10;

    /**
     * @var string
     *
     * @ORM\Column(name="conditions", type="string", length=255,nullable=true)
     */
    private $conditions;

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
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set support
     *
     * @param string $support
     * @return Retour
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return string 
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set remboursement
     *
     * @param boolean $remboursement
     * @return Retour
     */
    public function setRemboursement($remboursement)
    {
        $this->remboursement = $remboursement;

        return $this;
    }

    /**
     * Get remboursement
     *
     * @return boolean 
     */
    public function getRemboursement()
    {
        return $this->remboursement;
    }

    /**
     * Set moyens
     *
     * @param string $moyens
     * @return Retour
     */
    public function setMoyens($moyens)
    {
        $this->moyens = $moyens;

        return $this;
    }

    /**
     * Get moyens
     *
     * @return string 
     */
    public function getMoyens()
    {
        return $this->moyens;
    }

    /**
     * Set delais
     *
     * @param integer $delais
     * @return Retour
     */
    public function setDelais($delais)
    {
        $this->delais = $delais;

        return $this;
    }

    /**
     * Get delais
     *
     * @return integer 
     */
    public function getDelais()
    {
        return $this->delais;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return Retour
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set virified
     *
     * @param boolean $virified
     * @return Retour
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
     * @return Retour
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
        return RetourType::class;
    }
}
