<?php

namespace ContainerJshmkuV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L3qWR6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l3qWR6_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l3qWR6_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mail' => ['privates', 'App\\Service\\MailService', 'getMailServiceService', true],
            'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'entityManager' => '?',
            'mail' => 'App\\Service\\MailService',
            'tokenGenerator' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
