<?php

/**
 * @file
 * Example of usage the cache.toolbar service.
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
   * The cache.toolbar service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $toolbar;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $toolbar
   *   The toolbar service.
   */
   public function __construct(DatabaseBackend $toolbar) {
     $this->toolbar = $toolbar;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.toolbar')
    );
  }

}
