<?php

/**
 * @file
 * Example of usage the cache.menu service.
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
   * The cache.menu service.
   *
   * @var \Drupal\Core\Cache\DatabaseBackend
   */
  protected $menu;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Cache\DatabaseBackend $menu
   *   The menu service.
   */
   public function __construct(DatabaseBackend $menu) {
     $this->menu = $menu;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('cache.menu')
    );
  }

}
