<?php

/**
 * @file
 * Example of usage the access_check.quickedit.entity_field service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\quickedit\Access\EditEntityFieldAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\quickedit\Access\EditEntityFieldAccessCheckInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.quickedit.entity_field service.
   *
   * @var \Drupal\quickedit\Access\EditEntityFieldAccessCheckInterface
   */
  protected $entityField;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\quickedit\Access\EditEntityFieldAccessCheckInterface $entity_field
   *   The entity_field service.
   */
   public function __construct(EditEntityFieldAccessCheckInterface $entity_field) {
     $this->entityField = $entity_field;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.quickedit.entity_field')
    );
  }

}
