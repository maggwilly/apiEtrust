<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Localisation extends \AppBundle\Entity\Localisation implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'lat', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'lon', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'lieu', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'ville', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'pays', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'virified', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'virifiedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'lat', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'lon', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'lieu', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'ville', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'pays', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'description', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'virified', '' . "\0" . 'AppBundle\\Entity\\Localisation' . "\0" . 'virifiedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Localisation $proxy) {
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
    public function setLat($lat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', array($lat));

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', array());

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLon($lon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLon', array($lon));

        return parent::setLon($lon);
    }

    /**
     * {@inheritDoc}
     */
    public function getLon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLon', array());

        return parent::getLon();
    }

    /**
     * {@inheritDoc}
     */
    public function setLieu($lieu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLieu', array($lieu));

        return parent::setLieu($lieu);
    }

    /**
     * {@inheritDoc}
     */
    public function getLieu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLieu', array());

        return parent::getLieu();
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
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', array($pays));

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', array());

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
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

}
