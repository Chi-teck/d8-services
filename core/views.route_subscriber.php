<?php

/**
 * @file
 * Example of usage the views.route_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\EventSubscriber\RouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The views.route_subscriber service.
   *
   * @var \Drupal\views\EventSubscriber\RouteSubscriber
   */
  protected $routeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\EventSubscriber\RouteSubscriber $route_subscriber
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
      $container->get('views.route_subscriber')
    );
  }

}
