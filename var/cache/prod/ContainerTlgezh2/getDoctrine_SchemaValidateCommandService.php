<?php

namespace ContainerTlgezh2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SchemaValidateCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.schema_validate_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\ValidateSchemaCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:schema:validate');

        return $instance;
    }
}
