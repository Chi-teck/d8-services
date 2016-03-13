<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.required_module_uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Extension\RequiredModuleUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.required_module_uninstall_validator service.
   *
   * @var \Drupal\Core\Extension\RequiredModuleUninstallValidator
   */
  protected $requiredModuleUninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Extension\RequiredModuleUninstallValidator $required_module_uninstall_validator
   *   The required_module_uninstall_validator service.
   */
   public function __construct(RequiredModuleUninstallValidator $required_module_uninstall_validator) {
     $this->requiredModuleUninstallValidator = $required_module_uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.required_module_uninstall_validator')
    );
  }

}
