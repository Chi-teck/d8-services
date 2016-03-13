<?php

/**
 * @file
 * Example of usage the cache.backend.apcu service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\ApcuBackendFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.backend.apcu service.
   *
   * @var \Drupal\Core\Cache\ApcuBackendFactory
   */
  protected $apcu;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\ApcuBackendFactory $apcu
   *   The apcu service.
   */
   public function __construct(ApcuBackendFactory $apcu) {
     $this->apcu = $apcu;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.backend.apcu')
    );
  }

}
