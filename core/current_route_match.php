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
   * The current_route_match service.
   *
   * @var \Drupal\Core\Routing\CurrentRouteMatch
   */
  protected $currentRouteMatch;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\CurrentRouteMatch $current_route_match
   *   The current_route_match service.
   */
   public function __construct(CurrentRouteMatch $current_route_match) {
     $this->currentRouteMatch = $current_route_match;
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
