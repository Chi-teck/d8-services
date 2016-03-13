<?php

/**
 * @file
 * Example of usage the cache_context.url.path service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\Context\PathCacheContext;
// The service interfaces.
use Drupal\Core\Cache\Context\CacheContextInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache_context.url.path service.
   *
   * @var \Drupal\Core\Cache\Context\PathCacheContext
   */
  protected $path;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\Context\PathCacheContext $path
   *   The path service.
   */
   public function __construct(PathCacheContext $path) {
     $this->path = $path;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache_context.url.path')
    );
  }

}
