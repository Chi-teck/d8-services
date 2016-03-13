<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.book.uninstall_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\book\BookUninstallValidator;
// The service interfaces.
use Drupal\Core\Extension\ModuleUninstallValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.book.uninstall_validator service.
   *
   * @var \Drupal\book\BookUninstallValidator
   */
  protected $uninstallValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\book\BookUninstallValidator $uninstall_validator
   *   The uninstall_validator service.
   */
   public function __construct(BookUninstallValidator $uninstall_validator) {
     $this->uninstallValidator = $uninstall_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.book.uninstall_validator')
    );
  }

}
