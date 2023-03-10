<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQualityCalculatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Model\Product\CalculatedValue\QualityCalculator' shared autowired service.
     *
     * @return \App\Model\Product\CalculatedValue\QualityCalculator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/Layout/DynamicTextLabelInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/models/DataObject/ClassDefinition/CalculatorClassInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Model/Product/CalculatedValue/QualityCalculator.php';

        return $container->services['App\\Model\\Product\\CalculatedValue\\QualityCalculator'] = new \App\Model\Product\CalculatedValue\QualityCalculator();
    }
}
