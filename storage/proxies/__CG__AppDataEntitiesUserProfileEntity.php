<?php

namespace DoctrineProxies\__CG__\App\Data\Entities\User;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProfileEntity extends \App\Data\Entities\User\ProfileEntity implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'id', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'salaris_min', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'salaris_max', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'user', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'skills', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'sections', 'createdAt', 'updatedAt', '_inludes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'id', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'salaris_min', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'salaris_max', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'user', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'skills', '' . "\0" . 'App\\Data\\Entities\\User\\ProfileEntity' . "\0" . 'sections', 'createdAt', 'updatedAt', '_inludes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProfileEntity $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalarisMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalarisMin', []);

        return parent::getSalarisMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalarisMin($salaris_min)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalarisMin', [$salaris_min]);

        return parent::setSalarisMin($salaris_min);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalarisMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalarisMax', []);

        return parent::getSalarisMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalarisMax($salaris_max)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalarisMax', [$salaris_max]);

        return parent::setSalarisMax($salaris_max);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getSkills()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSkills', []);

        return parent::getSkills();
    }

    /**
     * {@inheritDoc}
     */
    public function setSkills($skills)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSkills', [$skills]);

        return parent::setSkills($skills);
    }

    /**
     * {@inheritDoc}
     */
    public function getSections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSections', []);

        return parent::getSections();
    }

    /**
     * {@inheritDoc}
     */
    public function setSections($sections)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSections', [$sections]);

        return parent::setSections($sections);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function with($includes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'with', [$includes]);

        return parent::with($includes);
    }

    /**
     * {@inheritDoc}
     */
    public function toJson()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJson', []);

        return parent::toJson();
    }

}
