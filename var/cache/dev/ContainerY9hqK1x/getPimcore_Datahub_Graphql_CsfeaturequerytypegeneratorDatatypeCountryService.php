<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPimcore_Datahub_Graphql_CsfeaturequerytypegeneratorDatatypeCountryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_country' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\ClassificationstoreFeatureQueryTypeGenerator\Country
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/ClassificationstoreFeatureQueryTypeGenerator/Base.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/ClassificationstoreFeatureQueryTypeGenerator/Country.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService2Service'));

        if (isset($container->privates['pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_country'])) {
            return $container->privates['pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_country'];
        }

        return $container->privates['pimcore.datahub.graphql.csfeaturequerytypegenerator_datatype_country'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\ClassificationstoreFeatureQueryTypeGenerator\Country($a);
    }
}
