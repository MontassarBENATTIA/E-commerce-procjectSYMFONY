<?php

namespace ContainerY6Xsglu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T6Wd0lLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t6Wd0lL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t6Wd0lL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'product' => ['privates', '.errored..service_locator.t6Wd0lL.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.t6Wd0lL": it references class "App\\Entity\\Product" but no such service exists.'],
        ], [
            'manager' => '?',
            'product' => 'App\\Entity\\Product',
        ]);
    }
}
