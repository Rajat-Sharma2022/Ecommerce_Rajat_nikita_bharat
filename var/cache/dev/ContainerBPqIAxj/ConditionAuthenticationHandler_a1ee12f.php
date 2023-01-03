<?php

namespace ContainerBPqIAxj;
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/Handler/ConditionAuthenticationHandler.php';

class ConditionAuthenticationHandler_a1ee12f extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler|null wrapped object, if the proxy is initialized
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

    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->beginTwoFactorAuthentication($context);
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

        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($instance);

        $instance->initializerefb7d = $initializer;

        return $instance;
    }

    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\Condition\TwoFactorConditionInterface $condition)
    {
        static $reflection;

        if (! $this->valueHolder7024d) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');
            $this->valueHolder7024d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($this);

        }

        $this->valueHolder7024d->__construct($authenticationHandler, $condition);
    }

    public function & __get($name)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__get', ['name' => $name], $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        if (isset(self::$publicPropertiesac5f6[$name])) {
            return $this->valueHolder7024d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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

        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler');

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
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\ConditionAuthenticationHandler $instance) {
            unset($instance->authenticationHandler, $instance->condition);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\ConditionAuthenticationHandler')->__invoke($this);
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

if (!\class_exists('ConditionAuthenticationHandler_a1ee12f', false)) {
    \class_alias(__NAMESPACE__.'\\ConditionAuthenticationHandler_a1ee12f', 'ConditionAuthenticationHandler_a1ee12f', false);
}
