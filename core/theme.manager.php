<?php

/**
 * @file
 * Example of usage the theme.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\ThemeManager;
// The service interfaces.
use Drupal\Core\Theme\ThemeManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.manager service.
   *
   * @var \Drupal\Core\Theme\ThemeManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\ThemeManagerInterface $manager
   *   The manager service.
   */
   public function __construct(ThemeManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.manager')
    );
  }

}
