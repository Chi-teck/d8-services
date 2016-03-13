<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.module_installer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Extension\ModuleInstaller;
// The service interfaces.
use Drupal\Core\Extension\ModuleInstallerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.module_installer service.
   *
   * @var \Drupal\Core\Extension\ModuleInstallerInterface
   */
  protected $moduleInstaller;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Extension\ModuleInstallerInterface $module_installer
   *   The module_installer service.
   */
   public function __construct(ModuleInstallerInterface $module_installer) {
     $this->moduleInstaller = $module_installer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.module_installer')
    );
  }

}
