<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordRecoveryServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\PasswordRecoveryService' shared autowired service.
     *
     * @return \App\Services\PasswordRecoveryService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/PasswordRecoveryService.php';

        $a = ($container->services['router'] ?? $container->getRouterService());

        if (isset($container->privates['App\\Services\\PasswordRecoveryService'])) {
            return $container->privates['App\\Services\\PasswordRecoveryService'];
        }

        return $container->privates['App\\Services\\PasswordRecoveryService'] = new \App\Services\PasswordRecoveryService(($container->services['CustomerManagementFrameworkBundle\\CustomerProvider\\CustomerProviderInterface'] ?? $container->getCustomerProviderInterfaceService()), $a);
    }
}
