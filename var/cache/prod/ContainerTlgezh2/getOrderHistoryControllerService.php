<?php

namespace ContainerTlgezh2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderHistoryControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\OrderHistoryController' shared autowired service.
     *
     * @return \App\Controller\OrderHistoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OrderHistoryController'] = $instance = new \App\Controller\OrderHistoryController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\OrderHistoryController', $container));

        return $instance;
    }
}
