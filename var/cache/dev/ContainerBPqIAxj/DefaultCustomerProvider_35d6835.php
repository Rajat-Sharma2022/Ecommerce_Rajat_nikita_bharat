<?php

namespace ContainerBPqIAxj;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerProvider/CustomerProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/CustomerProvider/DefaultCustomerProvider.php';

class DefaultCustomerProvider_35d6835 extends \CustomerManagementFrameworkBundle\CustomerProvider\DefaultCustomerProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \CustomerManagementFrameworkBundle\CustomerProvider\DefaultCustomerProvider|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7024d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerefb7d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesac5f6 = [
        
    ];

    public function getCustomerClassId()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getCustomerClassId', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getCustomerClassId();
    }

    public function getCustomerClassName()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getCustomerClassName', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getCustomerClassName();
    }

    public function getList()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getList', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getList();
    }

    public function create(array $data = [])
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'create', array('data' => $data), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->create($data);
    }

    public function createCustomerInstance()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'createCustomerInstance', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->createCustomerInstance();
    }

    public function update(\CustomerManagementFrameworkBundle\Model\CustomerInterface $customer, array $data = [])
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'update', array('customer' => $customer, 'data' => $data), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->update($customer, $data);
    }

    public function delete(\CustomerManagementFrameworkBundle\Model\CustomerInterface $customer)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'delete', array('customer' => $customer), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->delete($customer);
    }

    public function getById($id, $force = false)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getById', array('id' => $id, 'force' => $force), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getById($id, $force);
    }

    public function getActiveCustomerByEmail($email)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getActiveCustomerByEmail', array('email' => $email), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getActiveCustomerByEmail($email);
    }

    public function applyObjectNamingScheme(\CustomerManagementFrameworkBundle\Model\CustomerInterface $customer)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'applyObjectNamingScheme', array('customer' => $customer), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->applyObjectNamingScheme($customer);
    }

    public function getParentPath()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getParentPath', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getParentPath();
    }

    public function getParentParentPath()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getParentParentPath', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getParentParentPath();
    }

    public function setParentPath($parentPath)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'setParentPath', array('parentPath' => $parentPath), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->setParentPath($parentPath);
    }

    public function addActiveCondition($list)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'addActiveCondition', array('list' => $list), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->addActiveCondition($list);
    }

    public function addInActiveCondition($list)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'addInActiveCondition', array('list' => $list), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->addInActiveCondition($list);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->pimcoreClass, $instance->parentPath, $instance->namingScheme, $instance->modelFactory, $instance->usesClassOverride, $instance->classNameWithoutNamespace);

        $instance->initializerefb7d = $initializer;

        return $instance;
    }

    public function __construct($pimcoreClass, $parentPath, \CustomerManagementFrameworkBundle\CustomerProvider\ObjectNamingScheme\ObjectNamingSchemeInterface $namingScheme, \Pimcore\Model\Factory $modelFactory)
    {
        static $reflection;

        if (! $this->valueHolder7024d) {
            $reflection = $reflection ?? new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');
            $this->valueHolder7024d = $reflection->newInstanceWithoutConstructor();
        unset($this->pimcoreClass, $this->parentPath, $this->namingScheme, $this->modelFactory, $this->usesClassOverride, $this->classNameWithoutNamespace);

        }

        $this->valueHolder7024d->__construct($pimcoreClass, $parentPath, $namingScheme, $modelFactory);
    }

    public function & __get($name)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__get', ['name' => $name], $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        if (isset(self::$publicPropertiesac5f6[$name])) {
            return $this->valueHolder7024d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7024d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7024d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7024d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7024d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__isset', array('name' => $name), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7024d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7024d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__unset', array('name' => $name), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        $realInstanceReflection = new \ReflectionClass('CustomerManagementFrameworkBundle\\CustomerProvider\\DefaultCustomerProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7024d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7024d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__clone', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        $this->valueHolder7024d = clone $this->valueHolder7024d;
    }

    public function __sleep()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__sleep', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return array('valueHolder7024d');
    }

    public function __wakeup()
    {
        unset($this->pimcoreClass, $this->parentPath, $this->namingScheme, $this->modelFactory, $this->usesClassOverride, $this->classNameWithoutNamespace);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerefb7d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerefb7d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'initializeProxy', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7024d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7024d;
    }
}

if (!\class_exists('DefaultCustomerProvider_35d6835', false)) {
    \class_alias(__NAMESPACE__.'\\DefaultCustomerProvider_35d6835', 'DefaultCustomerProvider_35d6835', false);
}
