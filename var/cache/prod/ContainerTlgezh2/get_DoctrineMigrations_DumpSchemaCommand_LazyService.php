<?php

namespace ContainerTlgezh2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_DoctrineMigrations_DumpSchemaCommand_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.doctrine_migrations.dump_schema_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.doctrine_migrations.dump_schema_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('doctrine:migrations:dump-schema', [], 'Dump the schema for your database to a migration.', false, #[\Closure(name: 'doctrine_migrations.dump_schema_command', class: 'Doctrine\\Migrations\\Tools\\Console\\Command\\DumpSchemaCommand')] fn (): \Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand => ($container->privates['doctrine_migrations.dump_schema_command'] ?? $container->load('getDoctrineMigrations_DumpSchemaCommandService')));
    }
}
