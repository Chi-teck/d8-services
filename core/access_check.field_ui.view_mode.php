<?php

/**
 * @file
 * Example of usage the access_check.field_ui.view_mode service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\field_ui\Access\ViewModeAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.field_ui.view_mode service.
   *
   * @var \Drupal\field_ui\Access\ViewModeAccessCheck
   */
  protected $viewMode;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\field_ui\Access\ViewModeAccessCheck $view_mode
   *   The view_mode service.
   */
   public function __construct(ViewModeAccessCheck $view_mode) {
     $this->viewMode = $view_mode;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.field_ui.view_mode')
    );
  }

}
