<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDuplicatesIndexCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.CustomerManagementFrameworkBundle\Command\DuplicatesIndexCommand' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Command\DuplicatesIndexCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Command/DuplicatesIndexCommand.php';

        $container->services['console.command.public_alias.CustomerManagementFrameworkBundle\\Command\\DuplicatesIndexCommand'] = $instance = new \CustomerManagementFrameworkBundle\Command\DuplicatesIndexCommand();

        $instance->setLogger(($container->services['monolog.logger.cmf'] ?? $container->load('getMonolog_Logger_CmfService')));
        $instance->setDuplicatesIndex(($container->services['CustomerManagementFrameworkBundle\\DuplicatesIndex\\DuplicatesIndexInterface'] ?? $container->load('getDuplicatesIndexInterfaceService')));

        return $instance;
    }
}
