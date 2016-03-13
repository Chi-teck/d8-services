<?php

/**
 * @file
 * Example of usage the route_access_response_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_access_response_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber
   */
  protected $routeAccessResponseSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber $route_access_response_subscriber
   *   The route_access_response_subscriber service.
   */
   public function __construct(RouteAccessResponseSubscriber $route_access_response_subscriber) {
     $this->routeAccessResponseSubscriber = $route_access_response_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_access_response_subscriber')
    );
  }

}
