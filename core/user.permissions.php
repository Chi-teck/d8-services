<?php

/**
 * @file
 * Example of usage the user.permissions service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\PermissionHandler;
// The service interfaces.
use Drupal\user\PermissionHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user.permissions service.
   *
   * @var \Drupal\user\PermissionHandlerInterface
   */
  protected $permissions;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\PermissionHandlerInterface $permissions
   *   The permissions service.
   */
   public function __construct(PermissionHandlerInterface $permissions) {
     $this->permissions = $permissions;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.permissions')
    );
  }

}
