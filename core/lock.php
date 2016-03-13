<?php

/**
 * @file
 * Example of usage the lock service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Lock\DatabaseLockBackend;
// The service interfaces.
use Drupal\Core\Lock\LockBackendInterface;

/**
 * The example.
 */
class Example {

  /**
   * The lock service.
   *
   * @var \Drupal\Core\ProxyClass\Lock\DatabaseLockBackend
   */
  protected $lock;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Lock\DatabaseLockBackend $lock
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
      $container->get('lock')
    );
  }

}
