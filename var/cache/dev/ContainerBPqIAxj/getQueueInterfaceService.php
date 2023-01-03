<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQueueInterfaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'CustomerManagementFrameworkBundle\ActionTrigger\Queue\QueueInterface' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\ActionTrigger\Queue\DefaultQueue
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/Queue/QueueInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/Queue/DefaultQueue.php';

        return $container->services['CustomerManagementFrameworkBundle\\ActionTrigger\\Queue\\QueueInterface'] = new \CustomerManagementFrameworkBundle\ActionTrigger\Queue\DefaultQueue();
    }
}
