<?php

/**
 * @file
 * Example of usage the access_check.field_ui.form_mode service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\field_ui\Access\FormModeAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.field_ui.form_mode service.
   *
   * @var \Drupal\field_ui\Access\FormModeAccessCheck
   */
  protected $formMode;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\field_ui\Access\FormModeAccessCheck $form_mode
   *   The form_mode service.
   */
   public function __construct(FormModeAccessCheck $form_mode) {
     $this->formMode = $form_mode;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.field_ui.form_mode')
    );
  }

}
