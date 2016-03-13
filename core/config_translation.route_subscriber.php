<?php

/**
 * @file
 * Example of usage the config_translation.route_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\config_translation\Routing\RouteSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config_translation.route_subscriber service.
   *
   * @var \Drupal\config_translation\Routing\RouteSubscriber
   */
  protected $routeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\config_translation\Routing\RouteSubscriber $route_subscriber
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
      $container->get('config_translation.route_subscriber')
    );
  }

}
