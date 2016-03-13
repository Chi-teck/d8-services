<?php

/**
 * @file
 * Example of usage the cache.static service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\MemoryBackend;
// The service interfaces.
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Cache\CacheTagsInvalidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.static service.
   *
   * @var \Drupal\Core\Cache\MemoryBackend
   */
  protected $static;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\MemoryBackend $static
   *   The static service.
   */
   public function __construct(MemoryBackend $static) {
     $this->static = $static;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.static')
    );
  }

}
