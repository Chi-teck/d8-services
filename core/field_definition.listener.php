<?php

/**
 * @file
 * Example of usage the field_definition.listener service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Field\FieldDefinitionListener;
// The service interfaces.
use Drupal\Core\Field\FieldDefinitionListenerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The field_definition.listener service.
   *
   * @var \Drupal\Core\Field\FieldDefinitionListenerInterface
   */
  protected $listener;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Field\FieldDefinitionListenerInterface $listener
   *   The listener service.
   */
   public function __construct(FieldDefinitionListenerInterface $listener) {
     $this->listener = $listener;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('field_definition.listener')
    );
  }

}
