<?php

/**
 * @file
 * Example of usage the access_check.theme service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Theme\ThemeAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.theme service.
   *
   * @var \Drupal\Core\Theme\ThemeAccessCheck
   */
  protected $theme;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Theme\ThemeAccessCheck $theme
   *   The theme service.
   */
   public function __construct(ThemeAccessCheck $theme) {
     $this->theme = $theme;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.theme')
    );
  }

}
