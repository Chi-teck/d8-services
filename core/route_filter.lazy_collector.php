<?php

/**
 * @file
 * Example of usage the route_filter.lazy_collector service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\LazyRouteFilter;
// The service interfaces.
use Symfony\Cmf\Component\Routing\NestedMatcher\RouteFilterInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_filter.lazy_collector service.
   *
   * @var \Drupal\Core\Routing\LazyRouteFilter
   */
  protected $lazyCollector;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\LazyRouteFilter $lazy_collector
   *   The lazy_collector service.
   */
   public function __construct(LazyRouteFilter $lazy_collector) {
     $this->lazyCollector = $lazy_collector;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_filter.lazy_collector')
    );
  }

}
