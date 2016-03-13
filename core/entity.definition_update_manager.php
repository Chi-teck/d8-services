<?php

/**
 * @file
 * Example of usage the entity.definition_update_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityDefinitionUpdateManager;
// The service interfaces.
use Drupal\Core\Entity\EntityDefinitionUpdateManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.definition_update_manager service.
   *
   * @var \Drupal\Core\Entity\EntityDefinitionUpdateManagerInterface
   */
  protected $definitionUpdateManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityDefinitionUpdateManagerInterface $definition_update_manager
   *   The definition_update_manager service.
   */
   public function __construct(EntityDefinitionUpdateManagerInterface $definition_update_manager) {
     $this->definitionUpdateManager = $definition_update_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.definition_update_manager')
    );
  }

}
