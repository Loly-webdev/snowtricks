<?php

namespace ContainerXg3k4X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ODULY_FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ODULY.f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ODULY.f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trick' => ['privates', '.errored..service_locator.ODULY.f.App\\Entity\\Trick', NULL, 'Cannot autowire service ".service_locator.ODULY.f": it references class "App\\Entity\\Trick" but no such service exists.'],
        ], [
            'trick' => 'App\\Entity\\Trick',
        ]);
    }
}
