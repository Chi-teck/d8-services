<?php

/**
 * @file
 * Example of usage the migrate.template_storage service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\migrate\MigrateTemplateStorage;
// The service interfaces.
use Drupal\migrate\MigrateTemplateStorageInterface;

/**
 * The example.
 */
class Example {

  /**
   * The migrate.template_storage service.
   *
   * @var \Drupal\migrate\MigrateTemplateStorageInterface
   */
  protected $templateStorage;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\migrate\MigrateTemplateStorageInterface $template_storage
   *   The template_storage service.
   */
   public function __construct(MigrateTemplateStorageInterface $template_storage) {
     $this->templateStorage = $template_storage;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('migrate.template_storage')
    );
  }

}
