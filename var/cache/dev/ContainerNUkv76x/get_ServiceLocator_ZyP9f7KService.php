<?php

namespace ContainerNUkv76x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZyP9f7KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZyP9f7K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZyP9f7K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'router' => ['services', 'router', 'getRouterService', false],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'serializer' => ['privates', 'debug.serializer', 'getDebug_SerializerService', false],
            'security.authorization_checker' => ['privates', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'twig' => ['privates', 'twig', 'getTwigService', false],
            'form.factory' => ['privates', 'form.factory', 'getForm_FactoryService', true],
            'security.token_storage' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
            'security.csrf.token_manager' => ['privates', 'security.csrf.same_origin_token_manager', 'getSecurity_Csrf_SameOriginTokenManagerService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
            'web_link.http_header_serializer' => ['privates', 'web_link.http_header_serializer', 'getWebLink_HttpHeaderSerializerService', false],
        ], [
            'router' => '?',
            'request_stack' => '?',
            'http_kernel' => '?',
            'serializer' => '?',
            'security.authorization_checker' => '?',
            'twig' => '?',
            'form.factory' => '?',
            'security.token_storage' => '?',
            'security.csrf.token_manager' => '?',
            'parameter_bag' => '?',
            'web_link.http_header_serializer' => '?',
        ]);
    }
}
