<?php

namespace ContainerYGeL1Jn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_00F2mJKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.00F2mJK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.00F2mJK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'App\\Service\\Mailer', 'getMailerService', true],
            'uploaderHelper' => ['privates', 'App\\Service\\UploaderHelper', 'getUploaderHelperService', true],
        ], [
            'mailer' => 'App\\Service\\Mailer',
            'uploaderHelper' => 'App\\Service\\UploaderHelper',
        ]);
    }
}