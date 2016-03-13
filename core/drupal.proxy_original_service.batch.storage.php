<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.batch.storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Batch\BatchStorage;
// The service interfaces.
use Drupal\Core\Batch\BatchStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.batch.storage service.
   *
   * @var \Drupal\Core\Batch\BatchStorageInterface
   */
  protected $storage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Batch\BatchStorageInterface $storage
   *   The storage service.
   */
   public function __construct(BatchStorageInterface $storage) {
     $this->storage = $storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.batch.storage')
    );
  }

}
