<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAccessoryPartNameService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Model\Product\CalculatedValue\AccessoryPartName' shared autowired service.
     *
     * @return \App\Model\Product\CalculatedValue\AccessoryPartName
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/CalculatorClassInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Model/Product/CalculatedValue/AccessoryPartName.php';

        return $container->services['App\\Model\\Product\\CalculatedValue\\AccessoryPartName'] = new \App\Model\Product\CalculatedValue\AccessoryPartName();
    }
}
