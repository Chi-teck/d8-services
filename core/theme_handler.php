<?php

/**
 * @file
 * Example of usage the theme_handler service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Extension\ThemeHandler;
// The service interfaces.
use Drupal\Core\Extension\ThemeHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme_handler service.
   *
   * @var \Drupal\Core\Extension\ThemeHandlerInterface
   */
  protected $themeHandler;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Extension\ThemeHandlerInterface $theme_handler
   *   The theme_handler service.
   */
   public function __construct(ThemeHandlerInterface $theme_handler) {
     $this->themeHandler = $theme_handler;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme_handler')
    );
  }

}
