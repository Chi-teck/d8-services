<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.lock service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Lock\DatabaseLockBackend;
// The service interfaces.
use Drupal\Core\Lock\LockBackendInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.lock service.
   *
   * @var \Drupal\Core\Lock\DatabaseLockBackend
   */
  protected $lock;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Lock\DatabaseLockBackend $lock
   *   The lock service.
   */
   public function __construct(DatabaseLockBackend $lock) {
     $this->lock = $lock;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.lock')
    );
  }

}
