<?php

/**
 * @file
 * Example of usage the current_route_match service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\CurrentRouteMatch;
// The service interfaces.
use Drupal\Core\Routing\ResettableStackedRouteMatchInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\Routing\StackedRouteMatchInterface;

/**
 * The example.
 */
class Example {

  /**
   * The currently active route match object.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected $routeMatch;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The route match.
   */
   public function __construct(RouteMatchInterface $route_match) {
     $this->routeMatch = $route_match;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('current_route_match')
    );
  }

}
