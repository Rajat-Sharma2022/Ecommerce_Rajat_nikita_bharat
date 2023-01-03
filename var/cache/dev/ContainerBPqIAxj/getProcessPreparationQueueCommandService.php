<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessPreparationQueueCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Pimcore\Bundle\EcommerceFrameworkBundle\Command\IndexService\ProcessPreparationQueueCommand' shared autowired service.
     *
     * @return \Pimcore\Bundle\EcommerceFrameworkBundle\Command\IndexService\ProcessPreparationQueueCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Command/IndexService/AbstractIndexServiceCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/Traits/Timeout.php';
        include_once \dirname(__DIR__, 4).'/vendor/webmozarts/console-parallelization/src/Parallelization.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/Traits/Parallelization.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/EcommerceFrameworkBundle/Command/IndexService/ProcessPreparationQueueCommand.php';

        return $container->services['console.command.public_alias.Pimcore\\Bundle\\EcommerceFrameworkBundle\\Command\\IndexService\\ProcessPreparationQueueCommand'] = new \Pimcore\Bundle\EcommerceFrameworkBundle\Command\IndexService\ProcessPreparationQueueCommand(($container->privates['Pimcore\\Bundle\\EcommerceFrameworkBundle\\IndexService\\IndexUpdateService'] ?? $container->load('getIndexUpdateServiceService')), ($container->services['pimcore_ecommerce.index_service'] ?? $container->load('getPimcoreEcommerce_IndexServiceService')));
    }
}
