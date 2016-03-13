<?php

/**
 * @file
 * Example of usage the maintenance_mode_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\MaintenanceModeSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The maintenance_mode_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber
   */
  protected $maintenanceModeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber $maintenance_mode_subscriber
   *   The maintenance_mode_subscriber service.
   */
   public function __construct(MaintenanceModeSubscriber $maintenance_mode_subscriber) {
     $this->maintenanceModeSubscriber = $maintenance_mode_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('maintenance_mode_subscriber')
    );
  }

}
