<?php

/**
 * @file
 * Example of usage the access_check.db_update service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\Access\DbUpdateAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.db_update service.
   *
   * @var \Drupal\system\Access\DbUpdateAccessCheck
   */
  protected $dbUpdate;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\Access\DbUpdateAccessCheck $db_update
   *   The db_update service.
   */
   public function __construct(DbUpdateAccessCheck $db_update) {
     $this->dbUpdate = $db_update;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.db_update')
    );
  }

}
