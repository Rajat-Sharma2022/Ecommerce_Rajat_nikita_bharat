<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCronTriggerCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.CustomerManagementFrameworkBundle\Command\CronTriggerCommand' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Command\CronTriggerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/lib/Console/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Command/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Command/CronTriggerCommand.php';

        $container->services['console.command.public_alias.CustomerManagementFrameworkBundle\\Command\\CronTriggerCommand'] = $instance = new \CustomerManagementFrameworkBundle\Command\CronTriggerCommand();

        $instance->setLogger(($container->services['monolog.logger.cmf'] ?? $container->load('getMonolog_Logger_CmfService')));
        $instance->setActionTriggerListener(($container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\EventHandler\\EventHandlerInterface'] ?? $container->load('getEventHandlerInterfaceService')));

        return $instance;
    }
}
