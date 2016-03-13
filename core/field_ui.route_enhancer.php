<?php

/**
 * @file
 * Example of usage the field_ui.route_enhancer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\field_ui\Routing\FieldUiRouteEnhancer;
// The service interfaces.
use Drupal\Core\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Cmf\Component\Routing\Enhancer\RouteEnhancerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The field_ui.route_enhancer service.
   *
   * @var \Drupal\field_ui\Routing\FieldUiRouteEnhancer
   */
  protected $routeEnhancer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\field_ui\Routing\FieldUiRouteEnhancer $route_enhancer
   *   The route_enhancer service.
   */
   public function __construct(FieldUiRouteEnhancer $route_enhancer) {
     $this->routeEnhancer = $route_enhancer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('field_ui.route_enhancer')
    );
  }

}
