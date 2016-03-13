<?php

/**
 * @file
 * Example of usage the entity.bundle_config_import_validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\Event\BundleConfigImportValidate;
// The service interfaces.
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.bundle_config_import_validator service.
   *
   * @var \Drupal\Core\Entity\Event\BundleConfigImportValidate
   */
  protected $bundleConfigImportValidator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\Event\BundleConfigImportValidate $bundle_config_import_validator
   *   The bundle_config_import_validator service.
   */
   public function __construct(BundleConfigImportValidate $bundle_config_import_validator) {
     $this->bundleConfigImportValidator = $bundle_config_import_validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.bundle_config_import_validator')
    );
  }

}
