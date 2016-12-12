<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Origine extends \AppBundle\Entity\Origine implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'origine', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'provenance', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'qualite', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'typeVente', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'grossiste', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'details', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'garenti', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'surCommande', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'virified', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'virifiedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'origine', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'provenance', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'qualite', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'typeVente', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'grossiste', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'details', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'garenti', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'surCommande', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'virified', '' . "\0" . 'AppBundle\\Entity\\Origine' . "\0" . 'virifiedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Origine $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProvenance($provenace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProvenance', array($provenace));

        return parent::setProvenance($provenace);
    }

    /**
     * {@inheritDoc}
     */
    public function getProvenance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProvenance', array());

        return parent::getProvenance();
    }

    /**
     * {@inheritDoc}
     */
    public function setQualite($qualite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQualite', array($qualite));

        return parent::setQualite($qualite);
    }

    /**
     * {@inheritDoc}
     */
    public function getQualite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQualite', array());

        return parent::getQualite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeVente($typeVente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeVente', array($typeVente));

        return parent::setTypeVente($typeVente);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeVente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeVente', array());

        return parent::getTypeVente();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrossiste($grossiste)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrossiste', array($grossiste));

        return parent::setGrossiste($grossiste);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrossiste()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrossiste', array());

        return parent::getGrossiste();
    }

    /**
     * {@inheritDoc}
     */
    public function setDetails($details)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDetails', array($details));

        return parent::setDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', array());

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setGarenti($garenti)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGarenti', array($garenti));

        return parent::setGarenti($garenti);
    }

    /**
     * {@inheritDoc}
     */
    public function getGarenti()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGarenti', array());

        return parent::getGarenti();
    }

    /**
     * {@inheritDoc}
     */
    public function setVirified($virified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVirified', array($virified));

        return parent::setVirified($virified);
    }

    /**
     * {@inheritDoc}
     */
    public function getVirified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirified', array());

        return parent::getVirified();
    }

    /**
     * {@inheritDoc}
     */
    public function setVirifiedAt($virifiedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVirifiedAt', array($virifiedAt));

        return parent::setVirifiedAt($virifiedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getVirifiedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirifiedAt', array());

        return parent::getVirifiedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClassType', array());

        return parent::getClassType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigine($origine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigine', array($origine));

        return parent::setOrigine($origine);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigine', array());

        return parent::getOrigine();
    }

    /**
     * {@inheritDoc}
     */
    public function setSurCommande($surCommande)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSurCommande', array($surCommande));

        return parent::setSurCommande($surCommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getSurCommande()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSurCommande', array());

        return parent::getSurCommande();
    }

}