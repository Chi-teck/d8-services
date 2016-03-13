<?php

/**
 * @file
 * Example of usage the access_check.permission service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\Access\PermissionAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.permission service.
   *
   * @var \Drupal\user\Access\PermissionAccessCheck
   */
  protected $permission;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\Access\PermissionAccessCheck $permission
   *   The permission service.
   */
   public function __construct(PermissionAccessCheck $permission) {
     $this->permission = $permission;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.permission')
    );
  }

}
