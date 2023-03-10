<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCmf_Security_UserProvider_OauthService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cmf.security.user_provider.oauth' shared autowired service.
     *
     * @return \CustomerManagementFrameworkBundle\Security\UserProvider\OAuthAwareUserProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/Core/User/OAuthAwareUserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/customer-management-framework-bundle/src/Security/UserProvider/OAuthAwareUserProvider.php';

        return $container->privates['cmf.security.user_provider.oauth'] = new \CustomerManagementFrameworkBundle\Security\UserProvider\OAuthAwareUserProvider(($container->privates['cmf.security.user_provider'] ?? $container->load('getCmf_Security_UserProviderService')), ($container->privates['CustomerManagementFrameworkBundle\\Security\\SsoIdentity\\DefaultSsoIdentityService'] ?? $container->load('getDefaultSsoIdentityServiceService')));
    }
}
