<?php

/**
 * @file
 * Example of usage the field_uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Field\FieldModuleUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The field_uninstall_validator service.
   *
   * @var \Drupal\Core\ProxyClass\Field\FieldModuleUninstallValidator
   */
  protected $fieldUninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Field\FieldModuleUninstallValidator $field_uninstall_validator
   *   The field_uninstall_validator service.
   */
   public function __construct(FieldModuleUninstallValidator $field_uninstall_validator) {
     $this->fieldUninstallValidator = $field_uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('field_uninstall_validator')
    );
  }

}
