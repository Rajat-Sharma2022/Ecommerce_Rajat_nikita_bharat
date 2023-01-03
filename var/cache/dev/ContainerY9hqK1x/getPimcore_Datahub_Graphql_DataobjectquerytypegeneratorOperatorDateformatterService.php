<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_DataobjectquerytypegeneratorOperatorDateformatterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.dataobjectquerytypegenerator_operator_dateformatter' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectQueryOperatorConfigGenerator\DateFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/OperatorTypeDefinitionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectQueryOperatorConfigGenerator/Base.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectQueryOperatorConfigGenerator/StringBase.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DataObjectQueryOperatorConfigGenerator/DateFormatter.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService2Service'));

        if (isset($container->privates['pimcore.datahub.graphql.dataobjectquerytypegenerator_operator_dateformatter'])) {
            return $container->privates['pimcore.datahub.graphql.dataobjectquerytypegenerator_operator_dateformatter'];
        }

        return $container->privates['pimcore.datahub.graphql.dataobjectquerytypegenerator_operator_dateformatter'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\DataObjectQueryOperatorConfigGenerator\DateFormatter($a);
    }
}
