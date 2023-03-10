<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventHandlerInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\ActionTrigger\EventHandler\EventHandlerInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\ActionTrigger\EventHandler\DefaultEventHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/EventHandler/EventHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/EventHandler/DefaultEventHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/Queue/QueueInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/Queue/DefaultQueue.php';

        $a = ($container->services['Knp\\Component\\Pager\\PaginatorInterface'] ?? $container->getPaginatorInterfaceService());

        if (isset($container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\EventHandler\\EventHandlerInterface'])) {
            return $container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\EventHandler\\EventHandlerInterface'];
        }

        $container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\EventHandler\\EventHandlerInterface'] = $instance = new \CustomerManagementFrameworkBundle\ActionTrigger\EventHandler\DefaultEventHandler(($container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\Queue\\QueueInterface'] ?? ($container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\Queue\\QueueInterface'] = new \CustomerManagementFrameworkBundle\ActionTrigger\Queue\DefaultQueue())), $a);

        $instance->setLogger(($container->services['monolog.logger.cmf'] ?? $container->load('getMonolog_Logger_CmfService')));

        return $instance;
    }
}
