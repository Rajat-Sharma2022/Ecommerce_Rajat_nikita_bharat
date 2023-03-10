<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_ActionTrigger_ActionManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cmf.action_trigger.action_manager' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\ActionTrigger\ActionManager\DefaultActionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/ActionManager/ActionManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/ActionTrigger/ActionManager/DefaultActionManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/GDPR/Consent/ConsentCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/GDPR/Consent/ConsentChecker.php';

        return $container->services['cmf.action_trigger.action_manager'] = new \CustomerManagementFrameworkBundle\ActionTrigger\ActionManager\DefaultActionManager(($container->privates['CustomerManagementFrameworkBundle\\GDPR\\Consent\\ConsentCheckerInterface'] ?? ($container->privates['CustomerManagementFrameworkBundle\\GDPR\\Consent\\ConsentCheckerInterface'] = new \CustomerManagementFrameworkBundle\GDPR\Consent\ConsentChecker())));
    }
}
