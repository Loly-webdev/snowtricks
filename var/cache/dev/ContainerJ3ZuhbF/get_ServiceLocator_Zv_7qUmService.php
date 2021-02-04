<?php

namespace ContainerJ3ZuhbF;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zv_7qUmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Zv.7qUm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Zv.7qUm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Security\\AuthenticatorController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Security\\RegistrationController::activation' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\Security\\RegistrationController::register' => ['privates', '.service_locator.00F2mJK', 'get_ServiceLocator_00F2mJKService', true],
            'App\\Controller\\Security\\ResetPasswordController::forgottenPassword' => ['privates', '.service_locator.14nY7WZ', 'get_ServiceLocator_14nY7WZService', true],
            'App\\Controller\\Security\\ResetPasswordController::resetPassword' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\Security\\UserController::edit' => ['privates', '.service_locator.LUBd5gR', 'get_ServiceLocator_LUBd5gRService', true],
            'App\\Controller\\Security\\UserController::updatePassword' => ['privates', '.service_locator.14nY7WZ', 'get_ServiceLocator_14nY7WZService', true],
            'App\\Controller\\TrickController::create' => ['privates', '.service_locator.LUBd5gR', 'get_ServiceLocator_LUBd5gRService', true],
            'App\\Controller\\TrickController::delete' => ['privates', '.service_locator.ODULY.f', 'get_ServiceLocator_ODULY_FService', true],
            'App\\Controller\\TrickController::edit' => ['privates', '.service_locator.aLM9o.0', 'get_ServiceLocator_ALM9o_0Service', true],
            'App\\Controller\\TrickController::show' => ['privates', '.service_locator.uCPkpc0', 'get_ServiceLocator_UCPkpc0Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Security\\AuthenticatorController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Security\\RegistrationController:activation' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\Security\\RegistrationController:register' => ['privates', '.service_locator.00F2mJK', 'get_ServiceLocator_00F2mJKService', true],
            'App\\Controller\\Security\\ResetPasswordController:forgottenPassword' => ['privates', '.service_locator.14nY7WZ', 'get_ServiceLocator_14nY7WZService', true],
            'App\\Controller\\Security\\ResetPasswordController:resetPassword' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\Security\\UserController:edit' => ['privates', '.service_locator.LUBd5gR', 'get_ServiceLocator_LUBd5gRService', true],
            'App\\Controller\\Security\\UserController:updatePassword' => ['privates', '.service_locator.14nY7WZ', 'get_ServiceLocator_14nY7WZService', true],
            'App\\Controller\\TrickController:create' => ['privates', '.service_locator.LUBd5gR', 'get_ServiceLocator_LUBd5gRService', true],
            'App\\Controller\\TrickController:delete' => ['privates', '.service_locator.ODULY.f', 'get_ServiceLocator_ODULY_FService', true],
            'App\\Controller\\TrickController:edit' => ['privates', '.service_locator.aLM9o.0', 'get_ServiceLocator_ALM9o_0Service', true],
            'App\\Controller\\TrickController:show' => ['privates', '.service_locator.uCPkpc0', 'get_ServiceLocator_UCPkpc0Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Security\\AuthenticatorController::login' => '?',
            'App\\Controller\\Security\\RegistrationController::activation' => '?',
            'App\\Controller\\Security\\RegistrationController::register' => '?',
            'App\\Controller\\Security\\ResetPasswordController::forgottenPassword' => '?',
            'App\\Controller\\Security\\ResetPasswordController::resetPassword' => '?',
            'App\\Controller\\Security\\UserController::edit' => '?',
            'App\\Controller\\Security\\UserController::updatePassword' => '?',
            'App\\Controller\\TrickController::create' => '?',
            'App\\Controller\\TrickController::delete' => '?',
            'App\\Controller\\TrickController::edit' => '?',
            'App\\Controller\\TrickController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Security\\AuthenticatorController:login' => '?',
            'App\\Controller\\Security\\RegistrationController:activation' => '?',
            'App\\Controller\\Security\\RegistrationController:register' => '?',
            'App\\Controller\\Security\\ResetPasswordController:forgottenPassword' => '?',
            'App\\Controller\\Security\\ResetPasswordController:resetPassword' => '?',
            'App\\Controller\\Security\\UserController:edit' => '?',
            'App\\Controller\\Security\\UserController:updatePassword' => '?',
            'App\\Controller\\TrickController:create' => '?',
            'App\\Controller\\TrickController:delete' => '?',
            'App\\Controller\\TrickController:edit' => '?',
            'App\\Controller\\TrickController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
