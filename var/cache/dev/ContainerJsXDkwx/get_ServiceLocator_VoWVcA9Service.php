<?php

namespace ContainerJsXDkwx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VoWVcA9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VoWVcA9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VoWVcA9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'adresse' => ['privates', '.errored..service_locator.VoWVcA9.App\\Entity\\Adresse', NULL, 'Cannot autowire service ".service_locator.VoWVcA9": it needs an instance of "App\\Entity\\Adresse" but this type has been excluded in "config/services.yaml".'],
        ], [
            'adresse' => 'App\\Entity\\Adresse',
        ]);
    }
}
