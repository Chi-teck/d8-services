<?php

/**
 * @file
 * Example of usage the route_http_method_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RouteMethodSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_http_method_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RouteMethodSubscriber
   */
  protected $routeHttpMethodSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RouteMethodSubscriber $route_http_method_subscriber
   *   The route_http_method_subscriber service.
   */
   public function __construct(RouteMethodSubscriber $route_http_method_subscriber) {
     $this->routeHttpMethodSubscriber = $route_http_method_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_http_method_subscriber')
    );
  }

}
