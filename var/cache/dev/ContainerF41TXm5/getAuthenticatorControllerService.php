<?php

namespace ContainerF41TXm5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthenticatorControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Security\AuthenticatorController' shared autowired service.
     *
     * @return \App\Controller\Security\AuthenticatorController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'AuthenticatorController.php';

        $container->services['App\\Controller\\Security\\AuthenticatorController'] = $instance = new \App\Controller\Security\AuthenticatorController();

        $instance->setContainer(($container->privates['.service_locator.wod53is'] ?? $container->load('get_ServiceLocator_Wod53isService'))->withContext('App\\Controller\\Security\\AuthenticatorController', $container));

        return $instance;
    }
}
