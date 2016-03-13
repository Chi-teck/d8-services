<?php

/**
 * @file
 * Example of usage the cache.render service.
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
   * The cache.render service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $render;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $render
   *   The render service.
   */
   public function __construct(DatabaseBackend $render) {
     $this->render = $render;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.render')
    );
  }

}
