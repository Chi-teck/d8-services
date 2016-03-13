<?php

/**
 * @file
 * Example of usage the field.uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\field\ProxyClass\FieldUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The field.uninstall_validator service.
   *
   * @var \Drupal\field\ProxyClass\FieldUninstallValidator
   */
  protected $uninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\field\ProxyClass\FieldUninstallValidator $uninstall_validator
   *   The uninstall_validator service.
   */
   public function __construct(FieldUninstallValidator $uninstall_validator) {
     $this->uninstallValidator = $uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('field.uninstall_validator')
    );
  }

}
