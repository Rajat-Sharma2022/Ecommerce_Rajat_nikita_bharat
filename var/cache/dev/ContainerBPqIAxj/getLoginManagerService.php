<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'CustomerManagementFrameworkBundle\Security\Authentication\LoginManager' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Security\Authentication\LoginManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Security/Authentication/LoginManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Security/Authentication/LoginManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/InMemoryUserChecker.php';

        $a = ($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService());

        if (isset($container->privates['CustomerManagementFrameworkBundle\\Security\\Authentication\\LoginManager'])) {
            return $container->privates['CustomerManagementFrameworkBundle\\Security\\Authentication\\LoginManager'];
        }

        return $container->privates['CustomerManagementFrameworkBundle\\Security\\Authentication\\LoginManager'] = new \CustomerManagementFrameworkBundle\Security\Authentication\LoginManager(($container->services['Pimcore\\Http\\RequestHelper'] ?? $container->getRequestHelperService()), $a, ($container->privates['security.authentication.session_strategy'] ?? ($container->privates['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->services['hwi_oauth.user_checker'] ?? ($container->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker())), $container);
    }
}