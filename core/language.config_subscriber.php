<?php

/**
 * @file
 * Example of usage the language.config_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\language\EventSubscriber\ConfigSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The language.config_subscriber service.
   *
   * @var \Drupal\language\EventSubscriber\ConfigSubscriber
   */
  protected $configSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\language\EventSubscriber\ConfigSubscriber $config_subscriber
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
      $container->get('language.config_subscriber')
    );
  }

}
