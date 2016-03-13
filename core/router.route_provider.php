<?php

/**
 * @file
 * Example of usage the router.route_provider service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\RouteProvider;
// The service interfaces.
use Drupal\Core\Routing\PreloadableRouteProviderInterface;
use Symfony\Cmf\Component\Routing\RouteProviderInterface;
use Drupal\Core\Routing\RouteProviderInterface;
use Symfony\Cmf\Component\Routing\PagedRouteProviderInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The router.route_provider service.
   *
   * @var \Drupal\Core\Routing\RouteProviderInterface
   */
  protected $routeProvider;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\RouteProviderInterface $route_provider
   *   The route_provider service.
   */
   public function __construct(RouteProviderInterface $route_provider) {
     $this->routeProvider = $route_provider;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('router.route_provider')
    );
  }

}
