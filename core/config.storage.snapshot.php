<?php

/**
 * @file
 * Example of usage the config.storage.snapshot service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\DatabaseStorage;
// The service interfaces.
use Drupal\Core\Config\StorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.storage.snapshot service.
   *
   * @var \Drupal\Core\Config\DatabaseStorage
   */
  protected $snapshot;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\DatabaseStorage $snapshot
   *   The snapshot service.
   */
   public function __construct(DatabaseStorage $snapshot) {
     $this->snapshot = $snapshot;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.storage.snapshot')
    );
  }

}
