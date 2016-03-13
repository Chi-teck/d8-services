<?php

/**
 * @file
 * Example of usage the cache.backend.php service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Cache\PhpBackendFactory;
// The service interfaces.
use Drupal\Core\Cache\CacheFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The cache.backend.php service.
   *
   * @var \Drupal\Core\Cache\PhpBackendFactory
   */
  protected $php;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\PhpBackendFactory $php
   *   The php service.
   */
   public function __construct(PhpBackendFactory $php) {
     $this->php = $php;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.backend.php')
    );
  }

}
