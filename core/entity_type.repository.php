<?php

/**
 * @file
 * Example of usage the entity_type.repository service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityTypeRepository;
// The service interfaces.
use Drupal\Core\Entity\EntityTypeRepositoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity_type.repository service.
   *
   * @var \Drupal\Core\Entity\EntityTypeRepositoryInterface
   */
  protected $repository;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityTypeRepositoryInterface $repository
   *   The repository service.
   */
   public function __construct(EntityTypeRepositoryInterface $repository) {
     $this->repository = $repository;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.repository')
    );
  }

}
