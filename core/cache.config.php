<?php

/**
 * @file
 * Example of usage the cache.config service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\ChainedFastBackend;
// The service interfaces.
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Cache\CacheTagsInvalidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.config service.
   *
   * @var \Drupal\Core\Cache\ChainedFastBackend
   */
  protected $config;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\ChainedFastBackend $config
   *   The config service.
   */
   public function __construct(ChainedFastBackend $config) {
     $this->config = $config;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.config')
    );
  }

}
