<?php

/**
 * @file
 * Example of usage the config.storage.schema service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Config\ExtensionInstallStorage;
// The service interfaces.
use Drupal\Core\Config\StorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The config.storage.schema service.
   *
   * @var \Drupal\Core\Config\ExtensionInstallStorage
   */
  protected $schema;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Config\ExtensionInstallStorage $schema
   *   The schema service.
   */
   public function __construct(ExtensionInstallStorage $schema) {
     $this->schema = $schema;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.storage.schema')
    );
  }

}
