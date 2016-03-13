<?php

/**
 * @file
 * Example of usage the access_check.user.role service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\Access\RoleAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.user.role service.
   *
   * @var \Drupal\user\Access\RoleAccessCheck
   */
  protected $role;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\Access\RoleAccessCheck $role
   *   The role service.
   */
   public function __construct(RoleAccessCheck $role) {
     $this->role = $role;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.user.role')
    );
  }

}
