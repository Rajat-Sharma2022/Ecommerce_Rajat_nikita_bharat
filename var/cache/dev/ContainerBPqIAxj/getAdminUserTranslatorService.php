<?php

namespace ContainerBPqIAxj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdminUserTranslatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Pimcore\Bundle\AdminBundle\Translation\AdminUserTranslator' shared autowired service.
     *
     * @return \Pimcore\Bundle\AdminBundle\Translation\AdminUserTranslator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/pimcore/pimcore/bundles/AdminBundle/Translation/AdminUserTranslator.php';

        return $container->privates['Pimcore\\Bundle\\AdminBundle\\Translation\\AdminUserTranslator'] = new \Pimcore\Bundle\AdminBundle\Translation\AdminUserTranslator(($container->services['Symfony\\Contracts\\Translation\\TranslatorInterface'] ?? $container->getTranslatorInterfaceService()), ($container->services['pimcore_admin.security.user_loader'] ?? $container->getPimcoreAdmin_Security_UserLoaderService()));
    }
}
