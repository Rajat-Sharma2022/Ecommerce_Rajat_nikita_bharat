<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VJdBbL7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vJdBbL7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vJdBbL7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'newsletterDoubleOptInService' => ['privates', 'App\\Services\\NewsletterDoubleOptInService', 'getNewsletterDoubleOptInServiceService', true],
            'translator' => ['services', 'Symfony\\Contracts\\Translation\\TranslatorInterface', 'getTranslatorInterfaceService', false],
        ], [
            'newsletterDoubleOptInService' => 'App\\Services\\NewsletterDoubleOptInService',
            'translator' => '?',
        ]);
    }
}
