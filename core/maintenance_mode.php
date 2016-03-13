<?php

/**
 * @file
 * Example of usage the maintenance_mode service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Site\MaintenanceMode;
// The service interfaces.
use Drupal\Core\Site\MaintenanceModeInterface;

/**
 * The example.
 */
class Example {

  /**
   * The maintenance_mode service.
   *
   * @var \Drupal\Core\Site\MaintenanceModeInterface
   */
  protected $maintenanceMode;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Site\MaintenanceModeInterface $maintenance_mode
   *   The maintenance_mode service.
   */
   public function __construct(MaintenanceModeInterface $maintenance_mode) {
     $this->maintenanceMode = $maintenance_mode;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('maintenance_mode')
    );
  }

}
