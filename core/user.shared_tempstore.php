<?php

/**
 * @file
 * Example of usage the user.shared_tempstore service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\SharedTempStoreFactory;

/**
 * The example.
 */
class Example {

  /**
   * The user.shared_tempstore service.
   *
   * @var \Drupal\user\SharedTempStoreFactory
   */
  protected $sharedTempstore;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\SharedTempStoreFactory $shared_tempstore
   *   The shared_tempstore service.
   */
   public function __construct(SharedTempStoreFactory $shared_tempstore) {
     $this->sharedTempstore = $shared_tempstore;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.shared_tempstore')
    );
  }

}
