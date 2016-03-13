<?php

/**
 * @file
 * Example of usage the cache.backend.chainedfast service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\ChainedFastBackendFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.backend.chainedfast service.
   *
   * @var \Drupal\Core\Cache\ChainedFastBackendFactory
   */
  protected $chainedfast;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\ChainedFastBackendFactory $chainedfast
   *   The chainedfast service.
   */
   public function __construct(ChainedFastBackendFactory $chainedfast) {
     $this->chainedfast = $chainedfast;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.backend.chainedfast')
    );
  }

}
