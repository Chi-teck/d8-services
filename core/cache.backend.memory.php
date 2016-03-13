<?php

/**
 * @file
 * Example of usage the cache.backend.memory service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\MemoryBackendFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.backend.memory service.
   *
   * @var \Drupal\Core\Cache\MemoryBackendFactory
   */
  protected $memory;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\MemoryBackendFactory $memory
   *   The memory service.
   */
   public function __construct(MemoryBackendFactory $memory) {
     $this->memory = $memory;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.backend.memory')
    );
  }

}
