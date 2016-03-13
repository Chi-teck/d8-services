<?php

/**
 * @file
 * Example of usage the config.installer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Config\ConfigInstaller;
// The service interfaces.
use Drupal\Core\Config\ConfigInstallerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.installer service.
   *
   * @var \Drupal\Core\ProxyClass\Config\ConfigInstaller
   */
  protected $installer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Config\ConfigInstaller $installer
   *   The installer service.
   */
   public function __construct(ConfigInstaller $installer) {
     $this->installer = $installer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.installer')
    );
  }

}
