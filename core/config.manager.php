<?php

/**
 * @file
 * Example of usage the config.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\ConfigManager;
// The service interfaces.
use Drupal\Core\Config\ConfigManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.manager service.
   *
   * @var \Drupal\Core\Config\ConfigManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\ConfigManagerInterface $manager
   *   The manager service.
   */
   public function __construct(ConfigManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.manager')
    );
  }

}
