<?php

/**
 * @file
 * Example of usage the node.route_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\node\Routing\RouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The node.route_subscriber service.
   *
   * @var \Drupal\node\Routing\RouteSubscriber
   */
  protected $routeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\node\Routing\RouteSubscriber $route_subscriber
   *   The route_subscriber service.
   */
   public function __construct(RouteSubscriber $route_subscriber) {
     $this->routeSubscriber = $route_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('node.route_subscriber')
    );
  }

}
