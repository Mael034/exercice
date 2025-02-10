<?php

namespace Container7ZnpiwV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Twig_Command_Lint_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.twig.command.lint.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.twig.command.lint.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lint:twig', [], 'Lint a Twig template and outputs encountered errors', false, #[\Closure(name: 'twig.command.lint', class: 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand')] fn (): \Symfony\Bundle\TwigBundle\Command\LintCommand => ($container->privates['twig.command.lint'] ?? $container->load('getTwig_Command_LintService')));
    }
}
