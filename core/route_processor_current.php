<?php

/**
 * @file
 * Example of usage the route_processor_current service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\RouteProcessor\RouteProcessorCurrent;
// The service interfaces.
use Drupal\Core\RouteProcessor\OutboundRouteProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_processor_current service.
   *
   * @var \Drupal\Core\RouteProcessor\RouteProcessorCurrent
   */
  protected $routeProcessorCurrent;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\RouteProcessor\RouteProcessorCurrent $route_processor_current
   *   The route_processor_current service.
   */
   public function __construct(RouteProcessorCurrent $route_processor_current) {
     $this->routeProcessorCurrent = $route_processor_current;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_processor_current')
    );
  }

}
