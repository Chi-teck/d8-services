<?php

/**
 * @file
 * Example of usage the route_subscriber.module service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ModuleRouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_subscriber.module service.
   *
   * @var \Drupal\Core\EventSubscriber\ModuleRouteSubscriber
   */
  protected $module;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ModuleRouteSubscriber $module
   *   The module service.
   */
   public function __construct(ModuleRouteSubscriber $module) {
     $this->module = $module;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_subscriber.module')
    );
  }

}
