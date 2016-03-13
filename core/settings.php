<?php

/**
 * @file
 * Example of usage the settings service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Site\Settings;

/**
 * The example.
 */
class Example {

  /**
   * The settings service.
   *
   * @var \Drupal\Core\Site\Settings
   */
  protected $settings;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Site\Settings $settings
   *   The settings service.
   */
   public function __construct(Settings $settings) {
     $this->settings = $settings;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('settings')
    );
  }

}
