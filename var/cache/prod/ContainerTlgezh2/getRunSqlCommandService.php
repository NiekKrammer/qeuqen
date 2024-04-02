<?php

namespace ContainerTlgezh2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRunSqlCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'Doctrine\DBAL\Tools\Console\Command\RunSqlCommand' shared service.
     *
     * @return \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand'] = $instance = new \Doctrine\DBAL\Tools\Console\Command\RunSqlCommand(($container->privates['Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider'] ?? $container->load('getManagerRegistryAwareConnectionProviderService')));

        $instance->setName('dbal:run-sql');

        return $instance;
    }
}
