<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Fiscalite extends \AppBundle\Entity\Fiscalite implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'nomJuridique', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'registre', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'defined', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'pays', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'contribuable', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'categorie', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'regime', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'conforme', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'fournie', 'requestForVerification');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'nomJuridique', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'registre', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'defined', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'pays', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'contribuable', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'categorie', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'regime', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'conforme', '' . "\0" . 'AppBundle\\Entity\\Fiscalite' . "\0" . 'fournie', 'requestForVerification');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Fiscalite $proxy) {
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
    public function setNomJuridique($nomJuridique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomJuridique', array($nomJuridique));

        return parent::setNomJuridique($nomJuridique);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomJuridique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomJuridique', array());

        return parent::getNomJuridique();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegistre($registre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegistre', array($registre));

        return parent::setRegistre($registre);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegistre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegistre', array());

        return parent::getRegistre();
    }

    /**
     * {@inheritDoc}
     */
    public function setContribuable($contribuable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContribuable', array($contribuable));

        return parent::setContribuable($contribuable);
    }

    /**
     * {@inheritDoc}
     */
    public function getContribuable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContribuable', array());

        return parent::getContribuable();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie($categorie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', array($categorie));

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', array());

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegime($regime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegime', array($regime));

        return parent::setRegime($regime);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegime', array());

        return parent::getRegime();
    }

    /**
     * {@inheritDoc}
     */
    public function setConforme($conforme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConforme', array($conforme));

        return parent::setConforme($conforme);
    }

    /**
     * {@inheritDoc}
     */
    public function getConforme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConforme', array());

        return parent::getConforme();
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
    public function setDefined($defined)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefined', array($defined));

        return parent::setDefined($defined);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefined()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefined', array());

        return parent::getDefined();
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
    public function setFournie($fournie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFournie', array($fournie));

        return parent::setFournie($fournie);
    }

    /**
     * {@inheritDoc}
     */
    public function getFournie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFournie', array());

        return parent::getFournie();
    }

    /**
     * {@inheritDoc}
     */
    public function setVerificationRequestedAt($verificationRequestedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVerificationRequestedAt', array($verificationRequestedAt));

        return parent::setVerificationRequestedAt($verificationRequestedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getVerificationRequestedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVerificationRequestedAt', array());

        return parent::getVerificationRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestForVerification(\AppBundle\Entity\Request $requestForVerification = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequestForVerification', array($requestForVerification));

        return parent::setRequestForVerification($requestForVerification);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestForVerification()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequestForVerification', array());

        return parent::getRequestForVerification();
    }

}