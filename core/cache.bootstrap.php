<?php

/**
 * @file
 * Example of usage the cache.bootstrap service.
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
   * The cache.bootstrap service.
   *
   * @var \Drupal\Core\Cache\ChainedFastBackend
   */
  protected $bootstrap;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\ChainedFastBackend $bootstrap
   *   The bootstrap service.
   */
   public function __construct(ChainedFastBackend $bootstrap) {
     $this->bootstrap = $bootstrap;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.bootstrap')
    );
  }

}
