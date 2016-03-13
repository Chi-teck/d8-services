<?php

/**
 * @file
 * Example of usage the cache.backend.database service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\DatabaseBackendFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.backend.database service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackendFactory
   */
  protected $database;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackendFactory $database
   *   The database service.
   */
   public function __construct(DatabaseBackendFactory $database) {
     $this->database = $database;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.backend.database')
    );
  }

}
