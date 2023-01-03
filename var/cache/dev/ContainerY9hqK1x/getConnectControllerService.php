<?php

namespace ContainerY9hqK1x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'HWI\Bundle\OAuthBundle\Controller\ConnectController' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\Controller\ConnectController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Controller/ConnectController.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/Http/ResourceOwnerMapLocator.php';

        $a = new \HWI\Bundle\OAuthBundle\Security\Http\ResourceOwnerMapLocator();
        $a->add('demo_frontend', ($container->services['hwi_oauth.resource_ownermap.demo_frontend'] ?? $container->getHwiOauth_ResourceOwnermap_DemoFrontendService()));

        $container->services['HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController'] = $instance = new \HWI\Bundle\OAuthBundle\Controller\ConnectController(($container->privates['hwi_oauth.security.oauth_utils'] ?? $container->getHwiOauth_Security_OauthUtilsService()), $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), false, 'IS_AUTHENTICATED_REMEMBERED', false, 'hwi_oauth_connect', false, $container->parameters['hwi_oauth.firewall_names']);

        $instance->setContainer($container);

        return $instance;
    }
}
