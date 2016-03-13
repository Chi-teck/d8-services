<?php

/**
 * @file
 * Example of usage the cache.rest service.
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
   * The cache.rest service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $rest;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $rest
   *   The rest service.
   */
   public function __construct(DatabaseBackend $rest) {
     $this->rest = $rest;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.rest')
    );
  }

}
