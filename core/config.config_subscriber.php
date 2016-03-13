<?php

/**
 * @file
 * Example of usage the config.config_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\config\ConfigSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.config_subscriber service.
   *
   * @var \Drupal\config\ConfigSubscriber
   */
  protected $configSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\config\ConfigSubscriber $config_subscriber
   *   The config_subscriber service.
   */
   public function __construct(ConfigSubscriber $config_subscriber) {
     $this->configSubscriber = $config_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.config_subscriber')
    );
  }

}
