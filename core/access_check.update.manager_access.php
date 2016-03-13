<?php

/**
 * @file
 * Example of usage the access_check.update.manager_access service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\update\Access\UpdateManagerAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.update.manager_access service.
   *
   * @var \Drupal\update\Access\UpdateManagerAccessCheck
   */
  protected $managerAccess;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\update\Access\UpdateManagerAccessCheck $manager_access
   *   The manager_access service.
   */
   public function __construct(UpdateManagerAccessCheck $manager_access) {
     $this->managerAccess = $manager_access;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.update.manager_access')
    );
  }

}
