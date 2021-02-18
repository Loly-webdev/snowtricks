<?php

namespace ContainerOnneO6x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UCPkpc0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uCPkpc0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uCPkpc0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['privates', 'App\\Service\\Paginator', 'getPaginatorService', true],
            'trick' => ['privates', '.errored..service_locator.uCPkpc0.App\\Entity\\Trick', NULL, 'Cannot autowire service ".service_locator.uCPkpc0": it references class "App\\Entity\\Trick" but no such service exists.'],
        ], [
            'paginator' => 'App\\Service\\Paginator',
            'trick' => 'App\\Entity\\Trick',
        ]);
    }
}
