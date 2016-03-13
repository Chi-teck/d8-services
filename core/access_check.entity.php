<?php

/**
 * @file
 * Example of usage the access_check.entity service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityAccessCheck;
// The service interfaces.
use Drupal\Core\Routing\Access\AccessInterface;

/**
 * The example.
 */
class Example {

  /**
   * The access_check.entity service.
   *
   * @var \Drupal\Core\Entity\EntityAccessCheck
   */
  protected $entity;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityAccessCheck $entity
   *   The entity service.
   */
   public function __construct(EntityAccessCheck $entity) {
     $this->entity = $entity;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('access_check.entity')
    );
  }

}
