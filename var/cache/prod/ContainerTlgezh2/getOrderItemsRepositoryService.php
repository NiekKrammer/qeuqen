<?php

namespace ContainerTlgezh2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderItemsRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\OrderItemsRepository' shared autowired service.
     *
     * @return \App\Repository\OrderItemsRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\OrderItemsRepository'] = new \App\Repository\OrderItemsRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
