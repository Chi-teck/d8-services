<?php

/**
 * @file
 * Example of usage the locale.config_subscriber service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\LocaleConfigSubscriber;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The locale.config_subscriber service.
   *
   * @var \Drupal\locale\LocaleConfigSubscriber
   */
  protected $configSubscriber;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\LocaleConfigSubscriber $config_subscriber
   *   The config_subscriber service.
   */
   public function __construct(LocaleConfigSubscriber $config_subscriber) {
     $this->configSubscriber = $config_subscriber;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('locale.config_subscriber')
    );
  }

}
