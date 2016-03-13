<?php

/**
 * @file
 * Example of usage the locale.config_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\locale\LocaleConfigManager;

/**
 * The example.
 */
class Example {

  /**
   * The locale.config_manager service.
   *
   * @var \Drupal\locale\LocaleConfigManager
   */
  protected $configManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\locale\LocaleConfigManager $config_manager
   *   The config_manager service.
   */
   public function __construct(LocaleConfigManager $config_manager) {
     $this->configManager = $config_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('locale.config_manager')
    );
  }

}
