<?php

/**
 * @file
 * Example of usage the config_import_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\EventSubscriber\ConfigImportSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config_import_subscriber service.
   *
   * @var \Drupal\Core\EventSubscriber\ConfigImportSubscriber
   */
  protected $configImportSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\EventSubscriber\ConfigImportSubscriber $config_import_subscriber
   *   The config_import_subscriber service.
   */
   public function __construct(ConfigImportSubscriber $config_import_subscriber) {
     $this->configImportSubscriber = $config_import_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config_import_subscriber')
    );
  }

}
