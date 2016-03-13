<?php

/**
 * @file
 * Example of usage the cache_context.route service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\RouteCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.route service.
   *
   * @var \Drupal\Core\Cache\Context\RouteCacheContext
   */
  protected $route;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\RouteCacheContext $route
   *   The route service.
   */
   public function __construct(RouteCacheContext $route) {
     $this->route = $route;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.route')
    );
  }

}
