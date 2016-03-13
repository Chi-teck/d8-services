<?php

/**
 * @file
 * Example of usage the route_enhancer.lazy_collector service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Routing\LazyRouteEnhancer;
// The service interfaces.
use Symfony\Cmf\Component\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The route_enhancer.lazy_collector service.
   *
   * @var \Drupal\Core\Routing\LazyRouteEnhancer
   */
  protected $lazyCollector;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Routing\LazyRouteEnhancer $lazy_collector
   *   The lazy_collector service.
   */
   public function __construct(LazyRouteEnhancer $lazy_collector) {
     $this->lazyCollector = $lazy_collector;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('route_enhancer.lazy_collector')
    );
  }

}
