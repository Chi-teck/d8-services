<?php

/**
 * @file
 * Example of usage the cache.dynamic_page_cache service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\DatabaseBackend;
// The service interfaces.
use Drupal\Core\Cache\CacheBackendInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.dynamic_page_cache service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $dynamicPageCache;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $dynamic_page_cache
   *   The dynamic_page_cache service.
   */
   public function __construct(DatabaseBackend $dynamic_page_cache) {
     $this->dynamicPageCache = $dynamic_page_cache;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.dynamic_page_cache')
    );
  }

}
