<?php

/**
 * @file
 * Example of usage the cache.entity service.
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
   * The cache.entity service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $entity
   *   The entity service.
   */
   public function __construct(DatabaseBackend $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.entity')
    );
  }

}
