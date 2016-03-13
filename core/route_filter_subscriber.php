<?php

/**
 * @file
 * Example of usage the route_filter_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RouteFilterSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_filter_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RouteFilterSubscriber
   */
  protected $routeFilterSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RouteFilterSubscriber $route_filter_subscriber
   *   The route_filter_subscriber service.
   */
   public function __construct(RouteFilterSubscriber $route_filter_subscriber) {
     $this->routeFilterSubscriber = $route_filter_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_filter_subscriber')
    );
  }

}
