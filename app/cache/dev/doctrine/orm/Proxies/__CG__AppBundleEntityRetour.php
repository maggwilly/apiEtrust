<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Retour extends \AppBundle\Entity\Retour implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'support', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'remboursement', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'moyens', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'delais', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'fournie', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'conditions', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'gestionLitige', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'defined', 'requestForVerification');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'support', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'remboursement', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'moyens', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'delais', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'fournie', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'conditions', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'gestionLitige', '' . "\0" . 'AppBundle\\Entity\\Retour' . "\0" . 'defined', 'requestForVerification');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Retour $proxy) {
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
    public function setRemboursement($remboursement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemboursement', array($remboursement));

        return parent::setRemboursement($remboursement);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemboursement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemboursement', array());

        return parent::getRemboursement();
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
    public function setConditions($conditions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConditions', array($conditions));

        return parent::setConditions($conditions);
    }

    /**
     * {@inheritDoc}
     */
    public function getConditions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConditions', array());

        return parent::getConditions();
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
    public function setGestionLitige($gestionLitige)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGestionLitige', array($gestionLitige));

        return parent::setGestionLitige($gestionLitige);
    }

    /**
     * {@inheritDoc}
     */
    public function getGestionLitige()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGestionLitige', array());

        return parent::getGestionLitige();
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
