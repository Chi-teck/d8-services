<?php

/**
 * @file
 * Example of usage the access_check.entity_create service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityCreateAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.entity_create service.
   *
   * @var \Drupal\Core\Entity\EntityCreateAccessCheck
   */
  protected $entityCreate;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityCreateAccessCheck $entity_create
   *   The entity_create service.
   */
   public function __construct(EntityCreateAccessCheck $entity_create) {
     $this->entityCreate = $entity_create;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.entity_create')
    );
  }

}
