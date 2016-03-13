<?php

/**
 * @file
 * Example of usage the config_snapshot_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config_snapshot_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber
   */
  protected $configSnapshotSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber $config_snapshot_subscriber
   *   The config_snapshot_subscriber service.
   */
   public function __construct(ConfigSnapshotSubscriber $config_snapshot_subscriber) {
     $this->configSnapshotSubscriber = $config_snapshot_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config_snapshot_subscriber')
    );
  }

}
