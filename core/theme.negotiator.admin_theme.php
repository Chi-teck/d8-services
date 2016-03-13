<?php

/**
 * @file
 * Example of usage the theme.negotiator.admin_theme service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\Theme\AdminNegotiator;
// The service interfaces.
use Drupal\Core\Theme\ThemeNegotiatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The theme.negotiator.admin_theme service.
   *
   * @var \Drupal\user\Theme\AdminNegotiator
   */
  protected $adminTheme;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\Theme\AdminNegotiator $admin_theme
   *   The admin_theme service.
   */
   public function __construct(AdminNegotiator $admin_theme) {
     $this->adminTheme = $admin_theme;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('theme.negotiator.admin_theme')
    );
  }

}
