<?php

namespace ContainerY9hqK1x;
include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Twig/Extension/Templating/Navigation.php';

class Navigation_62d2b4b extends \Pimcore\Twig\Extension\Templating\Navigation implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Pimcore\Twig\Extension\Templating\Navigation|null wrapped object, if the proxy is initialized
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

    public function build(array $params) : \Pimcore\Navigation\Container
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'build', array('params' => $params), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->build($params);
    }

    public function getRenderer(string $alias) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getRenderer', array('alias' => $alias), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getRenderer($alias);
    }

    public function render(\Pimcore\Navigation\Container $container, string $rendererName = 'menu', string $renderMethod = 'render', ... $rendererArguments)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'render', array('container' => $container, 'rendererName' => $rendererName, 'renderMethod' => $renderMethod, 'rendererArguments' => $rendererArguments), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->render($container, $rendererName, $renderMethod, ...$rendererArguments);
    }

    public function __call($method, array $arguments = []) : \Pimcore\Navigation\Renderer\RendererInterface
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->__call($method, $arguments);
    }

    public function setCharset(string $charset)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'setCharset', array('charset' => $charset), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->setCharset($charset);
    }

    public function getCharset()
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, 'getCharset', array(), $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        return $this->valueHolder7024d->getCharset();
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

        unset($instance->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $instance, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($instance);

        $instance->initializerefb7d = $initializer;

        return $instance;
    }

    public function __construct(\Pimcore\Navigation\Builder $builder, \Psr\Container\ContainerInterface $rendererLocator)
    {
        static $reflection;

        if (! $this->valueHolder7024d) {
            $reflection = $reflection ?? new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');
            $this->valueHolder7024d = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);

        }

        $this->valueHolder7024d->__construct($builder, $rendererLocator);
    }

    public function & __get($name)
    {
        $this->initializerefb7d && ($this->initializerefb7d->__invoke($valueHolder7024d, $this, '__get', ['name' => $name], $this->initializerefb7d) || 1) && $this->valueHolder7024d = $valueHolder7024d;

        if (isset(self::$publicPropertiesac5f6[$name])) {
            return $this->valueHolder7024d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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

        $realInstanceReflection = new \ReflectionClass('Pimcore\\Twig\\Extension\\Templating\\Navigation');

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
        unset($this->charset);

        \Closure::bind(function (\Pimcore\Twig\Extension\Templating\Navigation $instance) {
            unset($instance->builder, $instance->rendererLocator);
        }, $this, 'Pimcore\\Twig\\Extension\\Templating\\Navigation')->__invoke($this);
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

if (!\class_exists('Navigation_62d2b4b', false)) {
    \class_alias(__NAMESPACE__.'\\Navigation_62d2b4b', 'Navigation_62d2b4b', false);
}
