<?php

/**
 * @file
 * Example of usage the field_storage_definition.listener service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Field\FieldStorageDefinitionListener;
// The service interfaces.
use Drupal\Core\Field\FieldStorageDefinitionListenerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The field_storage_definition.listener service.
   *
   * @var \Drupal\Core\Field\FieldStorageDefinitionListenerInterface
   */
  protected $listener;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Field\FieldStorageDefinitionListenerInterface $listener
   *   The listener service.
   */
   public function __construct(FieldStorageDefinitionListenerInterface $listener) {
     $this->listener = $listener;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('field_storage_definition.listener')
    );
  }

}
