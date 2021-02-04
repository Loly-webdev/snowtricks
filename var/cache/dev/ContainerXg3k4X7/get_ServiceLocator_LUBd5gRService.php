<?php

namespace ContainerXg3k4X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LUBd5gRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LUBd5gR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LUBd5gR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'uploaderHelper' => ['privates', 'App\\Service\\UploaderHelper', 'getUploaderHelperService', true],
        ], [
            'uploaderHelper' => 'App\\Service\\UploaderHelper',
        ]);
    }
}