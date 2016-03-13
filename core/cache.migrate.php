<?php

/**
 * @file
 * Example of usage the cache.migrate service.
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
   * The cache.migrate service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $migrate;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $migrate
   *   The migrate service.
   */
   public function __construct(DatabaseBackend $migrate) {
     $this->migrate = $migrate;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.migrate')
    );
  }

}
