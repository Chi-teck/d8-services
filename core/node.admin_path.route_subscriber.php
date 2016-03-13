<?php

/**
 * @file
 * Example of usage the node.admin_path.route_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\EventSubscriber\NodeAdminRouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The node.admin_path.route_subscriber service.
   *
   * @var \Drupal\node\EventSubscriber\NodeAdminRouteSubscriber
   */
  protected $routeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\EventSubscriber\NodeAdminRouteSubscriber $route_subscriber
   *   The route_subscriber service.
   */
   public function __construct(NodeAdminRouteSubscriber $route_subscriber) {
     $this->routeSubscriber = $route_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('node.admin_path.route_subscriber')
    );
  }

}
