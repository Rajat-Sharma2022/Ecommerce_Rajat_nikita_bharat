<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHwiOauth_ResourceOwner_TwitterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'hwi_oauth.resource_owner.twitter' shared service.
     *
     * @return \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\TwitterResourceOwner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwnerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/AbstractResourceOwner.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/GenericOAuth1ResourceOwner.php';
        include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/TwitterResourceOwner.php';

        return $container->services['hwi_oauth.resource_owner.twitter'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\TwitterResourceOwner(($container->privates['hwi_oauth.http_client'] ?? $container->load('getHwiOauth_HttpClientService')), ($container->privates['security.http_utils'] ?? $container->getSecurity_HttpUtilsService()), ['client_id' => '<twitter_client_id>', 'client_secret' => '<twitter_client_secret>', 'options' => ['csrf' => true], 'paths' => []], 'twitter', ($container->privates['hwi_oauth.storage.session'] ?? $container->load('getHwiOauth_Storage_SessionService')));
    }
}
