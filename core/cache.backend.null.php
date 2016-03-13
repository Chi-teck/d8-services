<?php

/**
 * @file
 * Example of usage the cache.backend.null service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\NullBackendFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.backend.null service.
   *
   * @var \Drupal\Core\Cache\NullBackendFactory
   */
  protected $null;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\NullBackendFactory $null
   *   The null service.
   */
   public function __construct(NullBackendFactory $null) {
     $this->null = $null;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.backend.null')
    );
  }

}
