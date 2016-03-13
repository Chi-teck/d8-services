<?php

/**
 * @file
 * Example of usage the config_translation.access.form service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\config_translation\Access\ConfigTranslationFormAccess;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config_translation.access.form service.
   *
   * @var \Drupal\config_translation\Access\ConfigTranslationFormAccess
   */
  protected $form;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\config_translation\Access\ConfigTranslationFormAccess $form
   *   The form service.
   */
   public function __construct(ConfigTranslationFormAccess $form) {
     $this->form = $form;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config_translation.access.form')
    );
  }

}
