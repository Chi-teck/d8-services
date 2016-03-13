<?php

/**
 * @file
 * Example of usage the route_enhancer_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\RouteEnhancerSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_enhancer_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\RouteEnhancerSubscriber
   */
  protected $routeEnhancerSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\RouteEnhancerSubscriber $route_enhancer_subscriber
   *   The route_enhancer_subscriber service.
   */
   public function __construct(RouteEnhancerSubscriber $route_enhancer_subscriber) {
     $this->routeEnhancerSubscriber = $route_enhancer_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_enhancer_subscriber')
    );
  }

}
