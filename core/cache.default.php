<?php

/**
 * @file
 * Example of usage the cache.default service.
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
   * The cache.default service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $default;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $default
   *   The default service.
   */
   public function __construct(DatabaseBackend $default) {
     $this->default = $default;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.default')
    );
  }

}
