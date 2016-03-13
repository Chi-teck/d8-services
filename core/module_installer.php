<?php

/**
 * @file
 * Example of usage the module_installer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Extension\ModuleInstaller;
// The service interfaces.
use Drupal\Core\Extension\ModuleInstallerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The module_installer service.
   *
   * @var \Drupal\Core\ProxyClass\Extension\ModuleInstaller
   */
  protected $moduleInstaller;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Extension\ModuleInstaller $module_installer
   *   The module_installer service.
   */
   public function __construct(ModuleInstaller $module_installer) {
     $this->moduleInstaller = $module_installer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('module_installer')
    );
  }

}
