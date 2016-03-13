<?php

/**
 * @file
 * Example of usage the router.route_preloader service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\RoutePreloader;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router.route_preloader service.
   *
   * @var \Drupal\Core\Routing\RoutePreloader
   */
  protected $routePreloader;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RoutePreloader $route_preloader
   *   The route_preloader service.
   */
   public function __construct(RoutePreloader $route_preloader) {
     $this->routePreloader = $route_preloader;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.route_preloader')
    );
  }

}
