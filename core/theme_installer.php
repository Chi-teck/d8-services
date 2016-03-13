<?php

/**
 * @file
 * Example of usage the theme_installer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Extension\ThemeInstaller;
// The service interfaces.
use Drupal\Core\Extension\ThemeInstallerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme_installer service.
   *
   * @var \Drupal\Core\Extension\ThemeInstallerInterface
   */
  protected $themeInstaller;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Extension\ThemeInstallerInterface $theme_installer
   *   The theme_installer service.
   */
   public function __construct(ThemeInstallerInterface $theme_installer) {
     $this->themeInstaller = $theme_installer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme_installer')
    );
  }

}
