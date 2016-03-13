<?php

/**
 * @file
 * Example of usage the route_processor_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\RouteProcessor\RouteProcessorManager;
// The service interfaces.
use Drupal\Core\RouteProcessor\OutboundRouteProcessorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_processor_manager service.
   *
   * @var \Drupal\Core\RouteProcessor\RouteProcessorManager
   */
  protected $routeProcessorManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\RouteProcessor\RouteProcessorManager $route_processor_manager
   *   The route_processor_manager service.
   */
   public function __construct(RouteProcessorManager $route_processor_manager) {
     $this->routeProcessorManager = $route_processor_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_processor_manager')
    );
  }

}
