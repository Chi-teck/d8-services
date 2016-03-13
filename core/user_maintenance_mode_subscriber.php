<?php

/**
 * @file
 * Example of usage the user_maintenance_mode_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\EventSubscriber\MaintenanceModeSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user_maintenance_mode_subscriber service.
   *
   * @var \Drupal\user\EventSubscriber\MaintenanceModeSubscriber
   */
  protected $userMaintenanceModeSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\EventSubscriber\MaintenanceModeSubscriber $user_maintenance_mode_subscriber
   *   The user_maintenance_mode_subscriber service.
   */
   public function __construct(MaintenanceModeSubscriber $user_maintenance_mode_subscriber) {
     $this->userMaintenanceModeSubscriber = $user_maintenance_mode_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user_maintenance_mode_subscriber')
    );
  }

}
