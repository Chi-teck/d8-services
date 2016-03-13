<?php

/**
 * @file
 * Example of usage the theme.initialization service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\ThemeInitialization;
// The service interfaces.
use Drupal\Core\Theme\ThemeInitializationInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.initialization service.
   *
   * @var \Drupal\Core\Theme\ThemeInitializationInterface
   */
  protected $initialization;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\ThemeInitializationInterface $initialization
   *   The initialization service.
   */
   public function __construct(ThemeInitializationInterface $initialization) {
     $this->initialization = $initialization;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.initialization')
    );
  }

}
