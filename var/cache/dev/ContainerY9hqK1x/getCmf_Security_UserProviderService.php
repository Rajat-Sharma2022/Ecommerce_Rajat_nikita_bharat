<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_Security_UserProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cmf.security.user_provider' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Security\UserProvider\CustomerObjectUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Security/UserProvider/CustomerObjectUserProvider.php';

        return $container->privates['cmf.security.user_provider'] = new \CustomerManagementFrameworkBundle\Security\UserProvider\CustomerObjectUserProvider(($container->services['CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface'] ?? $container->getCustomerProviderInterfaceService()), 'email');
    }
}
