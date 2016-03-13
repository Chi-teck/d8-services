<?php

/**
 * @file
 * Example of usage the cache_context.route.name service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\RouteNameCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.route.name service.
   *
   * @var \Drupal\Core\Cache\Context\RouteNameCacheContext
   */
  protected $name;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\RouteNameCacheContext $name
   *   The name service.
   */
   public function __construct(RouteNameCacheContext $name) {
     $this->name = $name;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.route.name')
    );
  }

}
