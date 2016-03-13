<?php

/**
 * @file
 * Example of usage the system.config_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\system\SystemConfigSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The system.config_subscriber service.
   *
   * @var \Drupal\system\SystemConfigSubscriber
   */
  protected $configSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\system\SystemConfigSubscriber $config_subscriber
   *   The config_subscriber service.
   */
   public function __construct(SystemConfigSubscriber $config_subscriber) {
     $this->configSubscriber = $config_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('system.config_subscriber')
    );
  }

}
