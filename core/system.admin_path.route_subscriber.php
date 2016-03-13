<?php

/**
 * @file
 * Example of usage the system.admin_path.route_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\EventSubscriber\AdminRouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The system.admin_path.route_subscriber service.
   *
   * @var \Drupal\system\EventSubscriber\AdminRouteSubscriber
   */
  protected $routeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\EventSubscriber\AdminRouteSubscriber $route_subscriber
   *   The route_subscriber service.
   */
   public function __construct(AdminRouteSubscriber $route_subscriber) {
     $this->routeSubscriber = $route_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('system.admin_path.route_subscriber')
    );
  }

}
