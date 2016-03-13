<?php

/**
 * @file
 * Example of usage the config.storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\CachedStorage;
// The service interfaces.
use Drupal\Core\Config\StorageInterface;
use Drupal\Core\Config\StorageCacheInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.storage service.
   *
   * @var \Drupal\Core\Config\CachedStorage
   */
  protected $storage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\CachedStorage $storage
   *   The storage service.
   */
   public function __construct(CachedStorage $storage) {
     $this->storage = $storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.storage')
    );
  }

}
