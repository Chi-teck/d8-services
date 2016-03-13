<?php

/**
 * @file
 * Example of usage the filter.uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\filter\ProxyClass\FilterUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The filter.uninstall_validator service.
   *
   * @var \Drupal\filter\ProxyClass\FilterUninstallValidator
   */
  protected $uninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\filter\ProxyClass\FilterUninstallValidator $uninstall_validator
   *   The uninstall_validator service.
   */
   public function __construct(FilterUninstallValidator $uninstall_validator) {
     $this->uninstallValidator = $uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('filter.uninstall_validator')
    );
  }

}
