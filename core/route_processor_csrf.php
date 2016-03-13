<?php

/**
 * @file
 * Example of usage the route_processor_csrf service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Access\RouteProcessorCsrf;
// The service interfaces.
use Drupal\Core\RouteProcessor\OutboundRouteProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_processor_csrf service.
   *
   * @var \Drupal\Core\Access\RouteProcessorCsrf
   */
  protected $routeProcessorCsrf;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Access\RouteProcessorCsrf $route_processor_csrf
   *   The route_processor_csrf service.
   */
   public function __construct(RouteProcessorCsrf $route_processor_csrf) {
     $this->routeProcessorCsrf = $route_processor_csrf;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_processor_csrf')
    );
  }

}
