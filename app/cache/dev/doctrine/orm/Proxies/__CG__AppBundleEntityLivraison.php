<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Livraison extends \AppBundle\Entity\Livraison implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'internationnal', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'delais', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'support', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'expedition', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'domicile', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'toutLePays', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'enMagazin', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'virified', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'virifiedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'internationnal', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'delais', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'support', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'expedition', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'domicile', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'toutLePays', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'enMagazin', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'virified', '' . "\0" . 'AppBundle\\Entity\\Livraison' . "\0" . 'virifiedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Livraison $proxy) {
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
    public function setInternationnal($internationnal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternationnal', array($internationnal));

        return parent::setInternationnal($internationnal);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternationnal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternationnal', array());

        return parent::getInternationnal();
    }

    /**
     * {@inheritDoc}
     */
    public function setDelais($delais)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDelais', array($delais));

        return parent::setDelais($delais);
    }

    /**
     * {@inheritDoc}
     */
    public function getDelais()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDelais', array());

        return parent::getDelais();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupport($support)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupport', array($support));

        return parent::setSupport($support);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupport', array());

        return parent::getSupport();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoyens($moyens)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoyens', array($moyens));

        return parent::setMoyens($moyens);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoyens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoyens', array());

        return parent::getMoyens();
    }

    /**
     * {@inheritDoc}
     */
    public function setDomicile($domicile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDomicile', array($domicile));

        return parent::setDomicile($domicile);
    }

    /**
     * {@inheritDoc}
     */
    public function getDomicile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDomicile', array());

        return parent::getDomicile();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpedition($expedition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpedition', array($expedition));

        return parent::setExpedition($expedition);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpedition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpedition', array());

        return parent::getExpedition();
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
    public function setEnMagazin($enMagazin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnMagazin', array($enMagazin));

        return parent::setEnMagazin($enMagazin);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnMagazin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnMagazin', array());

        return parent::getEnMagazin();
    }

    /**
     * {@inheritDoc}
     */
    public function setToutLePays($toutLePays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToutLePays', array($toutLePays));

        return parent::setToutLePays($toutLePays);
    }

    /**
     * {@inheritDoc}
     */
    public function getToutLePays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToutLePays', array());

        return parent::getToutLePays();
    }

}
