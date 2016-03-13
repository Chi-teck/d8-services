<?php

/**
 * @file
 * Example of usage the cache.data service.
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
   * The cache.data service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $data;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $data
   *   The data service.
   */
   public function __construct(DatabaseBackend $data) {
     $this->data = $data;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.data')
    );
  }

}
