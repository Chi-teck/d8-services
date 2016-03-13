<?php

/**
 * @file
 * Example of usage the batch.storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Batch\BatchStorage;
// The service interfaces.
use Drupal\Core\Batch\BatchStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The batch.storage service.
   *
   * @var \Drupal\Core\ProxyClass\Batch\BatchStorage
   */
  protected $storage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Batch\BatchStorage $storage
   *   The storage service.
   */
   public function __construct(BatchStorage $storage) {
     $this->storage = $storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('batch.storage')
    );
  }

}
