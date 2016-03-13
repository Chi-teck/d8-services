<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.lock.persistent service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Lock\PersistentDatabaseLockBackend;
// The service interfaces.
use Drupal\Core\Lock\LockBackendInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.lock.persistent service.
   *
   * @var \Drupal\Core\Lock\PersistentDatabaseLockBackend
   */
  protected $persistent;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Lock\PersistentDatabaseLockBackend $persistent
   *   The persistent service.
   */
   public function __construct(PersistentDatabaseLockBackend $persistent) {
     $this->persistent = $persistent;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.lock.persistent')
    );
  }

}
