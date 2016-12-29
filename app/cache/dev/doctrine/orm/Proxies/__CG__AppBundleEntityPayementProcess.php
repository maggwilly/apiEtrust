<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PayementProcess extends \AppBundle\Entity\PayementProcess implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'mode', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'orangeMobileTel', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'confirMsgReceived', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'transactionId', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'reference', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'montant', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'devise', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'createdAt');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'mode', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'orangeMobileTel', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'confirMsgReceived', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'transactionId', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'reference', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'status', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'montant', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'devise', '' . "\0" . 'AppBundle\\Entity\\PayementProcess' . "\0" . 'createdAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PayementProcess $proxy) {
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
    public function setMode($mode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMode', array($mode));

        return parent::setMode($mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMode', array());

        return parent::getMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrangeMobileTel($orangeMobileTel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrangeMobileTel', array($orangeMobileTel));

        return parent::setOrangeMobileTel($orangeMobileTel);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrangeMobileTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrangeMobileTel', array());

        return parent::getOrangeMobileTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfirMsgReceived($confirMsgReceived)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfirMsgReceived', array($confirMsgReceived));

        return parent::setConfirMsgReceived($confirMsgReceived);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfirMsgReceived()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfirMsgReceived', array());

        return parent::getConfirMsgReceived();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransactionId($transactionId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransactionId', array($transactionId));

        return parent::setTransactionId($transactionId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransactionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransactionId', array());

        return parent::getTransactionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference($reference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', array($reference));

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', array());

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($status));

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', array($montant));

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', array());

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($ceatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($ceatedAt));

        return parent::setCreatedAt($ceatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDevise($devise)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDevise', array($devise));

        return parent::setDevise($devise);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevise()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevise', array());

        return parent::getDevise();
    }

}