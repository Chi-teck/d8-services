<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.config.installer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\ConfigInstaller;
// The service interfaces.
use Drupal\Core\Config\ConfigInstallerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.config.installer service.
   *
   * @var \Drupal\Core\Config\ConfigInstallerInterface
   */
  protected $installer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\ConfigInstallerInterface $installer
   *   The installer service.
   */
   public function __construct(ConfigInstallerInterface $installer) {
     $this->installer = $installer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.config.installer')
    );
  }

}
