<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInputService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementInputProcessor\Input' shared autowired service.
     *
     * @return \Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementInputProcessor\Input
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/Traits/ServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DocumentElementInputProcessor/Base.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/data-hub/src/GraphQL/DocumentElementInputProcessor/Input.php';

        $a = ($container->services['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\Service'] ?? $container->load('getService2Service'));

        if (isset($container->privates['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\DocumentElementInputProcessor\\Input'])) {
            return $container->privates['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\DocumentElementInputProcessor\\Input'];
        }

        return $container->privates['Pimcore\\Bundle\\DataHubBundle\\GraphQL\\DocumentElementInputProcessor\\Input'] = new \Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementInputProcessor\Input(($container->services['Pimcore\\Model\\Document\\Editable\\Loader\\EditableLoader'] ?? $container->getEditableLoaderService()), $a);
    }
}
