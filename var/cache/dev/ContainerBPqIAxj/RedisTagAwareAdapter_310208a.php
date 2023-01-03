<?php

namespace ContainerBPqIAxj;
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/AbstractTagAwareAdapter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/RedisTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/RedisTagAwareAdapter.php';

class RedisTagAwareAdapter_310208a extends \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Symfony\Component\Cache\Adapter\RedisTagAwareAdapter|null wrapped object, if the proxy is initialized
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

    public function commit() : bool
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'commit', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->commit();
    }

    public function deleteItems(array $keys) : bool
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'deleteItems', array('keys' => $keys), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->deleteItems($keys);
    }

    public function invalidateTags(array $tags)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'invalidateTags', array('tags' => $tags), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->invalidateTags($tags);
    }

    public function hasItem($key)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'hasItem', array('key' => $key), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->hasItem($key);
    }

    public function clear(string $prefix = '')
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'clear', array('prefix' => $prefix), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->clear($prefix);
    }

    public function deleteItem($key)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'deleteItem', array('key' => $key), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->deleteItem($key);
    }

    public function getItem($key)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getItem', array('key' => $key), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getItem($key);
    }

    public function getItems(array $keys = [])
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getItems', array('keys' => $keys), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getItems($keys);
    }

    public function save(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'save', array('item' => $item), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->save($item);
    }

    public function saveDeferred(\Psr\Cache\CacheItemInterface $item)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'saveDeferred', array('item' => $item), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->saveDeferred($item);
    }

    public function enableVersioning(bool $enable = true)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'enableVersioning', array('enable' => $enable), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->enableVersioning($enable);
    }

    public function reset()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'reset', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->reset();
    }

    public function setLogger(\Psr\Log\LoggerInterface $logger)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'setLogger', array('logger' => $logger), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->setLogger($logger);
    }

    public function setCallbackWrapper(?callable $callbackWrapper) : callable
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'setCallbackWrapper', array('callbackWrapper' => $callbackWrapper), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->setCallbackWrapper($callbackWrapper);
    }

    public function get(string $key, callable $callback, ?float $beta = null, ?array &$metadata = null)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'get', array('key' => $key, 'callback' => $callback, 'beta' => $beta, 'metadata' => $metadata), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->get($key, $callback, $beta, $metadata);
    }

    public function delete(string $key) : bool
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'delete', array('key' => $key), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->delete($key);
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

        unset($instance->maxIdLength, $instance->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($instance);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $instance, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($instance);

        $instance->initializerefb7d = $initializer;

        return $instance;
    }

    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, ?\Symfony\Component\Cache\Marshaller\MarshallerInterface $marshaller = null)
    {
        static $reflection;

        if (! $this->valueHolder7024d) {
            $reflection = $reflection ?? new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');
            $this->valueHolder7024d = $reflection->newInstanceWithoutConstructor();
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);

        }

        $this->valueHolder7024d->__construct($redis, $namespace, $defaultLifetime, $marshaller);
    }

    public function & __get($name)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__get', ['name' => $name], $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        if (isset(self::$publicPropertiesac5f6[$name])) {
            return $this->valueHolder7024d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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

        $realInstanceReflection = new \ReflectionClass('Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter');

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
        unset($this->maxIdLength, $this->logger);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\RedisTagAwareAdapter $instance) {
            unset($instance->redisEvictionPolicy, $instance->namespace, $instance->redis, $instance->marshaller);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\RedisTagAwareAdapter')->__invoke($this);

        \Closure::bind(function (\Symfony\Component\Cache\Adapter\AbstractTagAwareAdapter $instance) {
            unset($instance->namespace, $instance->defaultLifetime, $instance->namespaceVersion, $instance->versioningIsEnabled, $instance->deferred, $instance->ids, $instance->callbackWrapper, $instance->computing);
        }, $this, 'Symfony\\Component\\Cache\\Adapter\\AbstractTagAwareAdapter')->__invoke($this);
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

    public function __destruct()
    {
        $this->initializerefb7d || $this->valueHolder7024d->__destruct();
    }
}

if (!\class_exists('RedisTagAwareAdapter_310208a', false)) {
    \class_alias(__NAMESPACE__.'\\RedisTagAwareAdapter_310208a', 'RedisTagAwareAdapter_310208a', false);
}
