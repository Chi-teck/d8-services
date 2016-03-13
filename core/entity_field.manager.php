<?php

/**
 * @file
 * Example of usage the entity_field.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityFieldManager;
// The service interfaces.
use Drupal\Core\Entity\EntityFieldManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_field.manager service.
   *
   * @var \Drupal\Core\Entity\EntityFieldManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityFieldManagerInterface $manager
   *   The manager service.
   */
   public function __construct(EntityFieldManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_field.manager')
    );
  }

}
